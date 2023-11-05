document.addEventListener('DOMContentLoaded', function () {
    console.log('load DOM');
    const deleteButtons = document.querySelectorAll('.btn-danger');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            eliminarEquipo(this.getAttribute('id'));
            // console.log(this.getAttribute('id'));
            // console.log('click');
        });
    });
});

function eliminarEquipo(id) {

    fetch('/equipos/' + id, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
    })
        .then(response => response.json())
        .then(data => {
            alert(data.success);
            // Aquí podrías también quitar el elemento del DOM o recargar la página
            location.reload();
        })
        .catch(error => console.error('Error:', error));

}
