/* Alert Save */
window.saveConfirm = function(formId) {
    Swal.fire({
        icon: 'warning',
        text: 'Do you want to delete this?',
        showCancelButton: true,
        confirmButtonText: 'Delete',
        confirmButtonColor: '#e3342f',
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById(formId).submit();
        }
    });
}

/* Alert Update */
$('.editConfirm').on('click', function () {
    var getLink = $(this).attr('href');
    Swal.fire({
        title: "Yakin ingin mengubah data, informasi gambar akan terhapus !",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        confirmButtonText: 'Ya',
        cancelButtonColor: '#3085d6',
        cancelButtonText: "Batal"

    }).then(result => {
        if (result.isConfirmed) {
            window.location.href = getLink
        }
    })
    return false;
});

/* Alert Delete */
$(document).ready(function () {
    $('.deleteConfirm').on('submit', function (e) {
        e.preventDefault();
        var button = $(this);

        Swal.fire({
            icon: 'warning',
            iconColor: '#d33',
            title: 'Are you sure you want to delete this record?',
            showDenyButton: false,
            showCancelButton: true,
            confirmButtonText: 'Yes'
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                $.ajax({
                    type: 'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: button.data('route'),
                    data: {
                        '_method': 'delete'
                    },
                    success: function (response, textStatus, xhr) {
                        Swal.fire({
                            icon: 'success',
                            title: response,
                            showDenyButton: false,
                            showCancelButton: false,
                            confirmButtonText: 'Yes'
                        }).then((result) => {
                            window.location = '/index-properties'
                        });
                    }
                });
            }
        });

    })
});
