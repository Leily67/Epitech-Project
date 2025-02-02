(function($) {
    //appel du pluging Jquery
    $.fn.my_wysiwyg = function(options) {
        let default_options = {
            buttons: ['gras', 'italique', 'barré', 'couleur', 'police', 'lien', 'taille', 'plus', 'minus', 'gauche', 'centrer', 'droite', 'justifier', 'générer', 'enregistrer', 'youtube', 'dailymotion', 'image']

        };
        //structure des différentes div
        let parameters = $.extend(default_options, options);
        return this.each(function() {
            $(this).wrap("<div class='wysiwyg'></div>");
            let wrap = $(this).parent();
            // insertion de la div Editor pour édition du texte dans le textarea
            wrap.append("<div class='editor' contenteditable='true'></div>");
            $(this).hide();

            wrap.prepend("<div class='buttons'></div");

            //bouton mise en Gras
            if ($.inArray("gras", parameters.buttons) != -1) {
                wrap.find(".buttons").append("<button class='gras'><img src='assets/bold.png'/></button>");
                wrap.find(".gras").click(function() {
                    document.execCommand('bold', false, null);
                });
            };

            // bouton Italique
            if ($.inArray("italique", parameters.buttons) != -1) {
                wrap.find(".buttons").append("<button class='italique'><img src='assets/italic.png'/></button>");
                wrap.find(".italique").click(function() {
                    document.execCommand('italic', false, null);
                });
            };

            // bouton texte Barré
            if ($.inArray("barré", parameters.buttons) != -1) {
                wrap.find(".buttons").append("<button class='barré'><img src='assets/bar.png'/></button>");
                wrap.find(".barré").click(function() {
                    document.execCommand('strikeThrough', false, null);
                });
            };

            // bouton Taille de police
            if ($.inArray("taille", parameters.buttons) != -1) {
                wrap.find(".buttons").append("<select class='taille'></select>");
                wrap.find(".taille").append("<option value =''>Taille</option>");
                wrap.find(".taille").append("<option value ='1'>6px</option>");
                wrap.find(".taille").append("<option value ='2'>8px</option>");
                wrap.find(".taille").append("<option value ='3'>12px</option>");
                wrap.find(".taille").append("<option value ='4'>14px</option>");
                wrap.find(".taille").append("<option value ='5'>20px</option>");
                wrap.find(".taille").append("<option value ='6'>24px</option>");
                wrap.find(".taille").append("<option value ='7'>32px</option>");
                wrap.find(".taille").change(function() {
                    document.execCommand('fontSize', false, $(this).val());

                });
            };

            // bouton choix Police de caractère
            if ($.inArray('police', parameters.buttons) != -1) {
                wrap.find(".buttons").append("<select class='police'></select");
                wrap.find(".police").append("<option value =''>Police</option>");
                wrap.find(".police").append("<option value ='Arial'>Arial</option>");
                wrap.find(".police").append("<option value ='Calibri'>Calibri</option>");
                wrap.find(".police").append("<option value ='Courier'>Courier</option>");
                wrap.find(".police").append("<option value ='Lucida sans'>Lucida Sans</option>");
                wrap.find(".police").append("<option value ='Times New Roman'>Times New Roman</option>");
                wrap.find(".police").append("<option value ='Serif'>Serif</option>");
                wrap.find(".police").append("<option value ='Verdana'>Verdana</option>");
                wrap.find(".police").change(function() {
                    document.execCommand('fontName', false, $(this).val());
                });

            };

            // bouton choix de Couleur
            if ($.inArray('couleur', parameters.buttons) != -1) {
                wrap.find(".buttons").append("<select class='color'></select");
                wrap.find(".color").append("<option value =''>Couleur</option>");
                wrap.find(".color").append("<option value ='#FF0000'>Rouge</option>");
                wrap.find(".color").append("<option value ='#0000FF'>Bleu</option>");
                wrap.find(".color").append("<option value ='#008000'>Vert</option>");
                wrap.find(".color").append("<option value ='#FFFF00'>Jaune</option>");
                wrap.find(".color").append("<option value ='#FF00FF'>Rose</option>");
                wrap.find(".color").append("<option value ='#800080'>Violet</option>");
                wrap.find(".color").append("<option value ='#FF8000'>Orange</option>");
                wrap.find(".color").change(function() {
                    document.execCommand('foreColor', false, $(this).val());
                });

            };

            // bouton Lien
            if ($.inArray("lien", parameters.buttons) != -1) {
                wrap.find(".buttons").append("<button class='lien'><img src='assets/link.png'/></button>");
                wrap.find(".lien").click(function() {
                  let linkURL = prompt('Enter a URL:', 'http://');
                  document.execCommand('createLink', false, linkURL);
                });
              };


            // bouton augmenter et diminuer taille
            let size = 3;

            if ($.inArray("plus", parameters.buttons) != -1) {
                wrap.find(".buttons").append("<button class='plus'><img src='assets/plus.png'/></button>");
                wrap.find('.plus').click(function() {
                    size = size + 1;
                    document.execCommand('fontSize', false, size);
                });
            };

            if ($.inArray("minus", parameters.buttons) != -1) {
                wrap.find(".buttons").append("<button class='minus'><img src='assets/minus.png'/></button>");
                wrap.find('.minus').click(function() {
                    size = size - 1;
                    document.execCommand('fontSize', false, size);
                });
            };

            // bouton mettre texte à gauche
            if ($.inArray("gauche", parameters.buttons) != -1) {
                wrap.find(".buttons").append("<button class='gauche'><img src='assets/left.png'/></button>");
                wrap.find('.gauche').click(function() {
                    document.execCommand('justifyLeft', false, null);
                });
            };

            // bouton mettre texte au centre
            if ($.inArray("centrer", parameters.buttons) != -1) {
                wrap.find(".buttons").append("<button class='centrer'><img src='assets/center.png'/></button>");
                wrap.find('.centrer').click(function() {
                    document.execCommand('justifyCenter', false, null);
                });
            };

            // bouton mettre texte à droite
            if ($.inArray("droite", parameters.buttons) != -1) {
                wrap.find(".buttons").append("<button class='droite'><img src='assets/right.png'/></button>");
                wrap.find('.droite').click(function() {
                    document.execCommand('justifyRight', false, null);
                });
            };

            // bouton mettre texte en justifier
            if ($.inArray("justifier", parameters.buttons) != -1) {
                wrap.find(".buttons").append("<button class='justifier'><img src='assets/justify.png'/></button>");
                wrap.find('.justifier').click(function() {
                    document.execCommand('justifyFull', false, null);
                });
            };

            // bouton générer du code
            if ($.inArray("générer", parameters.buttons) != -1) {
                wrap.find(".buttons").append("<button class='générer'><img src='assets/gen.png'/></button>");
                wrap.find(".générer").click(function() {
                  let html = wrap.find(".editor").html();
                  let str = html.split("<br>");
                  let content = "";
                  $.each(str, function( index, value ) {
                    let str1 = "<p> " + value + "</p>";
                    content += str1;
                    let n = wrap.find("textarea").html(content);
                  });
                  wrap.find("textarea").toggle();
                  wrap.find(".editor").toggle();
                });
              };

            // bouton enregistrer
            if ($.inArray("enregistrer", parameters.buttons) != -1) {
                wrap.find(".buttons").append("<button claass='enregistrer'><img src='assets/save.png/'></button>");
                wrap.find('.enregistrer').click(function() {
                    let text = $(".editor").html();

                    localStorage.setItem('tex2', text);
                });
            };

            // bouton afficher viédo Youtube
            if ($.inArray("youtube", parameters.buttons) != -1) {
                wrap.find(".buttons").append("<button class='youtube'>Youtube</button>");
                wrap.find(".youtube").click(function() {
                  let video = prompt("Please enter your URL", "https://");
                  let urlReplace = video.replace("watch?v=", "embed/");
                  let embed = '<iframe width="560" height="315" src="'+ urlReplace+'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
                  wrap.find(".editor").append(embed);
                });
              };

            // bouton afficher vidéo Dailymotion
            if ($.inArray("dailymotion", parameters.buttons) != -1) {
                wrap.find(".buttons").append("<button class='dailymotion'>Daylimotion</button>");
                wrap.find(".dailymotion").click(function() {
                  let video = prompt("Please enter your URL", "https://");
                  let urlRep = video.replace("video/", "embed/video/");
                  let add = '<iframe frameborder="0" width="480" height="270" src="'+ urlRep +'" allowfullscreen></iframe>';
                  wrap.find(".editor").append(add);
                });
              };

            // bouton afficher Image
            if ($.inArray("image", parameters.buttons) != -1) {
                wrap.find(".buttons").append("<input class='image' type ='file'>");
                wrap.find(".image").change(function() {
                    if (this.files && this.files[0]) {
                        let reader = new FileReader();
                        reader.onload = function(e) {
                            $('.editor').append("<img src=" + reader.result + ">")
                        }
                        reader.readAsDataURL(this.files[0]);
                    }
                });
            }


        });
    };
})(jQuery);

$(document).ready(function() {
    $("#wysiwyg").my_wysiwyg();
});