document.getElementById('kategori-button').addEventListener('click', function() {
    var kategoriDiv = document.getElementById('kategori');
    if (kategoriDiv.classList.contains('hidden')) {
        kategoriDiv.classList.remove('hidden');
    } else {
        kategoriDiv.classList.add('hidden');
    }
});

