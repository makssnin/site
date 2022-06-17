@section('footer')
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top text-bg-primary">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="ms-5 mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <span class="mb-3 mb-md-0 text-collor"> © <?php echo date("Y"); ?> Company, Inc </span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-2"><a class="text-muted" href="#"><img class="bi" width="24" height="24" src="/svg/vk.svg"></a></li>
            <li class="ms-2"><a class="text-muted" href="#"><img class="bi" width="24" height="24" src="/svg/instagram.svg"></a></li>
            <li class="ms-2 me-5"><a class="text-muted" href="#"><img class="bi" width="24" height="24" src="/svg/mail.svg"></a></li>
        </ul>
</footer>

