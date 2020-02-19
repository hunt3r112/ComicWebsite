document.getElementById('comicName').addEventListener("focusout", addURL);
document.getElementById('comicURLUpdate').addEventListener("click", updateURL);
function addURL() {
    document.getElementById('comicURL').value = document.getElementById('comicName').value;
}
function updateURL() {
    document.getElementById('comicURL').removeAttribute('disabled');
}