// Please see documentation at https://docs.microsoft.com/aspnet/core/client-side/bundling-and-minification
// for details on configuring this project to bundle and minify static web assets.

// Write your JavaScript code.
function validateInput(input) {
    // Menghapus karakter non-angka dari nilai input
    input.value = input.value.replace(/[^0-9]/g, '');
}