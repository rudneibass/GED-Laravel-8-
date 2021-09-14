function confirmDestroy(id, route) {
    var form = document.getElementById('form-delete');
    form.action = '../' + route + '/' + id + '/destroy';
}