<style>
    #shareit {
        background: rgba(223, 114, 70, 0.7);
        border-radius: 12px 6px 0 6px;
        padding-right: 12%;
        overflow: hidden;
        padding: 10px;
        display: flex;
        flex-flow: row-reverse;
    }

    #shareittext {
        text-align: right;
        margin-right: 10px;
    }

    #shareittext h2 {
        color: white;
        font-weight: bolder;
    }

    #shareitimage {
        margin: 10px;
    }
</style>

<div id="shareit">
    <img id="shareitimage" src="tools/shareit/presentation/images/shareit.svg" />
    <div id="shareittext">
        <h2>Astuces et bons plans</h2>
        <p>Comment partager une info pour le bulletin de veille ? Avec la souris prenez le bouton je partage et glissez le dans la barre des favoris. Quand vous voulez partagez une adresse web : cliquez sur le bouton, écrivez votre
            nom ou un commentaire dans l'onglet qui vient de s'ouvrir
        </p>
        <a
            href="javascript:var%20wleft%20=%20(screen.width-700)/2;%20var%20wtop=(screen.height-530)/2%20;window.open('http://www.cdrflorac.fr/cdr/wakka.php?wiki=JePartage%2Fiframe&vue=saisir&action=saisir_fiche&id_typeannonce=1&bf_titre='+escape(document.title)+'&url='+encodeURIComponent(location.href)+'&description='+escape(document.getSelection()),%20'Je%20partage',%20'height=530,width=700,left='+wleft+',top='+wtop+',toolbar=no,location=no,directories=no,status=no,scrollbars=yes,resizable=yes,menubar=no');void%200;"
            style="border-bottom-colors: none;
            border-image: none;
            border-left-colors: none;
            border-right-colors: none;
            border-top-colors: none;
            background-color: #F5F5F5;
            background-image: -moz-linear-gradient(center top , #FFFFFF, #E6E6E6);
            background-repeat: repeat-x;
            border-color: #CCCCCC #CCCCCC #B3B3B3;
            border-radius: 4px 4px 4px 4px;
            border-style: solid;
            border-width: 1px;
            text-decoration: none;
            box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2) inset, 0 1px 2px rgba(0, 0, 0, 0.05);
            color: #333333;
            cursor: pointer;
            display: inline-block;
            font-size: 13px;
            line-height: 18px;
            margin-bottom: 0;
            padding: 4px 10px;
            text-align: center;
            text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
            vertical-align: middle;"
            title="Glissez ce bookmarklet dans la barre des favoris"
        >
            Je partage
        </a>
    </div>
</div>
