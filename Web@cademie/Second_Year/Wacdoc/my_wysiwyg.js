(function($) {
    // Appel du plugin jQuery
    $.fn.my_wysiwyg = function(options) {
        let default_options = {
            buttons: ['titre', 'puce', 'num', 'gras', 'italique', 'souligner', 'couleur', 'générer']
        };

        // Structure des différentes div
        let parameters = $.extend(default_options, options);
        return this.each(function() {
            $(this).wrap("<div class='wysiwyg'></div>");
            let wrap = $(this).parent();
            // Insertion de la div Editor pour l'édition du texte dans le textarea
            wrap.append("<div class='editor' contenteditable='true'></div>");
            $(this).hide();

            wrap.prepend("<div class='buttons'></div>");

            // Bouton mise en titre
            if ($.inArray("titre", parameters.buttons) != -1) {
                wrap.find(".buttons").append("<button class='titre'><img src='assets/titre.png'/></button>");
                wrap.find(".titre").click(function() {
                    document.execCommand('formatBlock', false, 'h3');
                });
            }

            // Bouton mise en liste à puces
            if ($.inArray("puce", parameters.buttons) != -1) {
                wrap.find(".buttons").append("<button class='puce'><img src='assets/puce.png'/></button>");
                wrap.find(".puce").click(function() {
                    document.execCommand('insertUnorderedList', false, null);
                });
            }

            // Bouton mise en liste numérotée
            if ($.inArray("num", parameters.buttons) != -1) {
                wrap.find(".buttons").append("<button class='num'><img src='assets/num.png'/></button>");
                wrap.find(".num").click(function() {
                    document.execCommand('insertOrderedList', false, null);
                });
            }

            // Bouton mise en Gras
            if ($.inArray("gras", parameters.buttons) != -1) {
                wrap.find(".buttons").append("<button class='gras'><img src='assets/bold.png'/></button>");
                wrap.find(".gras").click(function() {
                    document.execCommand('bold', false, null);
                });
            }

            // Bouton Italique
            if ($.inArray("italique", parameters.buttons) != -1) {
                wrap.find(".buttons").append("<button class='italique'><img src='assets/italique.png'/></button>");
                wrap.find(".italique").click(function() {
                    document.execCommand('italic', false, null);
                });
            }

            // Bouton texte Souligner
            if ($.inArray("souligner", parameters.buttons) != -1) {
                wrap.find(".buttons").append("<button class='souligner'><img src='assets/souligner.png'/></button>");
                wrap.find(".souligner").click(function() {
                    document.execCommand('underline', false, null);
                });
            }

            // Bouton choix de Couleur
            if ($.inArray('couleur', parameters.buttons) != -1) {
                wrap.find(".buttons").append("<select class='color'></select>");
                wrap.find(".color").append("<option value=''>Couleur</option>");
                wrap.find(".color").append("<option value='#FF0000'>Rouge</option>");
                wrap.find(".color").append("<option value='#0000FF'>Bleu</option>");
                wrap.find(".color").append("<option value='#008000'>Vert</option>");
                wrap.find(".color").append("<option value='#FFFF00'>Jaune</option>");
                wrap.find(".color").append("<option value='#FF00FF'>Rose</option>");
                wrap.find(".color").append("<option value='#800080'>Violet</option>");
                wrap.find(".color").append("<option value='#FF8000'>Orange</option>");
                wrap.find(".color").change(function() {
                    document.execCommand('foreColor', false, $(this).val());
                });
            }
        });
    };
})(jQuery);

$(document).ready(function() {
    $("#wysiwyg").my_wysiwyg();

    // Fonction pour supprimer un fichier
    function deleteFile(filename) {
        if (confirm("Êtes-vous sûr de vouloir supprimer ce fichier ?")) {
            $.ajax({
                url: "delete_file.php", // Chemin vers le fichier PHP pour supprimer le fichier
                method: "POST",
                data: { filename: filename },
                success: function(response) {
                    if (response == "success") {
                        alert("Le fichier a été supprimé avec succès.");
                        location.reload(); // Recharger la page après la suppression
                    } else {
                        alert("Une erreur s'est produite lors de la suppression du fichier.");
                    }
                },
                error: function() {
                    alert("Une erreur s'est produite lors de la suppression du fichier.");
                }
            });
        }
    }

    // Gestion du clic sur le bouton Supprimer
    $(".delete-button").click(function() {
        let filename = $(this).data("filename");
        deleteFile(filename);
    });

    $(document).ready(function() {
  $(".save-button").on("click", function(e) {
    e.preventDefault();
    saveContent();
  });

  function saveContent() {
    var filename = "<?php echo $filename; ?>";
    var content = $("#wysiwyg").html();

    $.post("save.php", { filename: filename, content: content })
      .done(function(response) {
        alert(response);
      })
      .fail(function() {
        alert("Une erreur s'est produite lors de la sauvegarde du fichier.");
      });
  }
});

});
