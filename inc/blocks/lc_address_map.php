<section class="address_map py-5">
    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-3">
                <h2>Address:</h2>
                <p class="mb-3">
                    <?=get_field('contact_address', 'options')?>
                </p>
                <p class="mb-3">
                <p>Tel: <a
                        href="tel:<?=parse_phone(get_field('contact_phone', 'options'))?>">
                        <?=get_field('contact_phone', 'options')?></a>
                </p>
                <p>Email: <a
                        href="mailto:<?=get_field('contact_email', 'options')?>"><?=get_field('contact_email', 'options')?></a>
                </p>
                </p>
                <h2>Opening Hours:</h2>
                <p><?=get_field('opening_hours', 'options')?>
                </p>
            </div>
            <div class="col-md-4 col-lg-3">
                <iframe class="mb-4"
                    src="<?=get_field('maps_id', 'options')?>"
                    width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                Get Directions<br>
                <a class="arrowlink"
                    href="<?=get_field('directions_url', 'options')?>"
                    target="_blank">Open map</a>
            </div>
        </div>
    </div>
</section>