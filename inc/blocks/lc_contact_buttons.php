<?php
$subject = $_GET['subject'] ?: 'General Enquiry';
?>
<section class="contact_buttons py-5">
    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="col-md-3 text-center">
                <div class="mb-4"><i class="fa-solid fa-envelope fa-2x has-slj-dark-text-color"></i></div>
                <a class="btn btn-primary"
                    href="mailto:<?=get_field('contact_email', 'options')?>?subject=<?=$subject?>">Email</a>
            </div>
            <div class="col-md-3 text-center">
                <div class="mb-4"><i class="fa-solid fa-phone fa-2x has-slj-dark-text-color"></i></div>
                <a class="btn btn-primary"
                    href="tel:<?=parse_phone(get_field('contact_phone', 'options'))?>">Telephone</a>
            </div>
        </div>
    </div>
</section>