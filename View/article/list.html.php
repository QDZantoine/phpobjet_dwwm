<style>
    #tbody_art{
        display:block;
        width: 100%;
        height: 200px;
        overflow:auto !important;
    }
    #thead_art,#tbody_art tr,#tfoot_art{
        display: table;
        width: 100%;

    }
</style>

<div class="w90 auto mt-4">
    <h1 class="titre center">LISTE ARTICLES</h1>
    <table class="w100 fw-bold" >
        <thead id= "thead_art">
            <tr class="bg_gray">
                <th class="w10 center" >ID</th>
                <th class="w10 center" >CODE</th>
                <th class="w50 center" >DESIGNATION</th>
                <th class="w10 center" >PU</th>
                <th class="w20 center" >ACTION</th>
            </tr>

        </thead>
        <tbody id="tbody_art">

        </tbody>
        <tfoot id="tfoot_art">
            <tr>
                <th colspan="5" id="nbre_art" class="center">Nombre articles...</th>
            </tr>

        </tfoot>
    </table>
</div>
<script>
    let articles = <?= $articles ?>;
    // alert(articles);
    console.log(articles);
    afficher(articles);

    

    function afficher(articles) {
        const nbre = articles.length;
        let html = articles.map(function(article) {
            return `
            <tr class="mt-2">
            <td class="w10 text-center" >${article.id}</td>
            <td class="w10" >${article.numArticle}</td>
            <td class="w50" >${article.designation}</td>
            <td class="w10" >${article.prixUnitaire}</td>
            <td class="w20 d-flex justify-content-between mt-2" >
            <button class="btn btn-sm btn-success me-2">Afficher</button>
            <button class="btn btn-sm btn-danger me-2">Supprimmer</button>
            <button class="btn btn-sm btn-primary me-2">Modifier</button>
            
            </td>
            </tr>
            `
        }).join(''); //separate the article without nothing
        tbody_art.innerHTML = html;
        nbre_art.innerHTML ="Nombre d'articles : " + nbre;
        tbody_art.scrollTop=tbody_art.scrollHeight;
    }
</script>