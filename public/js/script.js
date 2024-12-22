/** @format */

document.addEventListener("DOMContentLoaded", function () {
  var appElement = document.getElementById("app");
  var isAuthenticated =
    appElement.getAttribute("data-authenticated") === "true";

  console.log("User is authenticated");
  // Lakukan sesuatu untuk pengguna yang terautentikasi
  // Auth Only , Profile Dropdown
  const dropdownProfile = document.querySelector('[role="menu"]');
  const menuButton = document.querySelector("#user-menu-button");
  // Klik di Luar Hamburger
  window.addEventListener("click", function (e) {
    console.log(e.target);
    if (e.target != menuButton && e.target != dropdownProfile) {
      dropdownProfile.classList.add("hidden");
    }
  });
  // Klik
  menuButton.addEventListener("click", function () {
    dropdownProfile.classList.toggle("hidden");
  });
  if (isAuthenticated) {
  } else {
    console.log("User is not authenticated");
    // Lakukan sesuatu untuk pengguna yang tidak terautentikasi
  }
});

// Small device Hamburger
const hamburger = document.querySelector("#mobile-hamburger");
const dropNav = document.querySelector("#mobile-menu");

// Klik di Luar Hamburger
window.addEventListener("click", function (e) {
  console.log(e.target);
  if (e.target != hamburger && e.target != dropNav) {
    dropNav.classList.add("hidden"); // nav responsive
  }
});

hamburger.addEventListener("click", function () {
  dropNav.classList.toggle("hidden");
});

//

function confirmLogout() {
  Swal.fire({
    title: "Apakah kamu ingin Logout?",
    text: "pastikan semua progress tersimpan !",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, Logout!",
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire({
        title: "Logout Succes !",
        text: "Anda telah berhasil logout !",
        icon: "success",
      });
      document.getElementById("logout-form").submit();
    }
  });
}

// Get the button
let mybutton = document.getElementById("myBtnTop");
let myNavbar = document.getElementById("myNavbar");
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
    myNavbar.classList.add("bg-white/80", "backdrop-blur");
  } else {
    mybutton.style.display = "none";
    myNavbar.classList.remove("bg-white/80", "backdrop-blur");
  }
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// DeleteConfirm
function deleteConfirm(idForm) {
  Swal.fire({
    title: "Apakah kamu yakin ingin menghapus ini?",
    text: "semua data/progress di dalamnya dan data yang bersangkutan dengan data ini akan terhapus, data yang anda hapus tidak dapat kembali !",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Ya, Hapus!",
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire({
        title: "Penghapusan Berhasil!",
        text: "Anda telah berhasil menghapus data ini !",
        icon: "success",
      }).then(() => {
        document.getElementById(`formDelete-${idForm}`).submit();
      });
    }
  });
}
