<?php get_header()?>

<section class="cta">
    <div class="container">
        <div class="cta__wrapper">
        <h3>Have a question?</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam quas cumque, alias autem quo fuga tenetur. Perspiciatis sed porro magnam?</p>
        <button id="btnModal">Contact</button>
        </div>
    </div>
</section>

<div class="modal">
    <div class="backdrop">
    </div>
    <div class="modal__main">
        <div class="modal__header">
            <h2>Contact Us</h2>
            <button id="btnClose"><i class="fas fa-times"></i></button>
        </div>
        <div class="modal__body">

        <?php echo do_shortcode('[contact-form-7 id="94" title="Contact form 1"]')?>
        </div>
    </div>
</div>

<?php get_footer()?>    