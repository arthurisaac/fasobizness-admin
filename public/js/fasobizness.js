$(document).ready(function() {
    $('.ui.dropdown').dropdown();
    $('.sidebar-menu-toggler').on('click', function() {
        const target = $(this).data('target');
        $(target)
            .sidebar({
                dinPage: true,
                transition: 'overlay',
                mobileTransition: 'overlay'
            })
            .sidebar('toggle');
    });
});


let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
width=0,height=0,left=-1000,top=-1000`;
function popup(url, target) {
    open(url, target, params);
}

