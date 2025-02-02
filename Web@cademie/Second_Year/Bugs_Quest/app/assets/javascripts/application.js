//= require script_avatar
  document.addEventListener("DOMContentLoaded", function() {
    const avatarSelect = document.querySelector("#avatar-select");
    const avatarImage = document.querySelector("#avatar-image");

    avatarSelect.addEventListener("change", function() {
      const selectedOption = avatarSelect.options[avatarSelect.selectedIndex];
      const selectedAvatar = selectedOption.value;
      avatarImage.src = `/assets/${selectedAvatar}`;
    });

    avatarSelect.dispatchEvent(new Event('change')); // Pour afficher l'avatar initial
  });

  