<?php get_header(); ?>

<main class="home-page container">
    <section class="cover">
        
        <div class="cover__txt">
            <h1 class="cover__txt__title">Te guiamos en el proceso de digitalizar tu empresa.</h1>
            <div class="cover__txt__calltoactions">
                <a href="#" class="btn-primary">
                    <svg class="svg-icon btn-theme-mode__svg"><use href="<?php echo get_template_directory_uri( ) ?>/assets/icons/symbols.svg#newspaper" /></svg>
                    Leer nuestro Blog
                </a>
                <a href="#" class="btn-scondary">
                    <svg class="svg-icon btn-theme-mode__svg"><use href="<?php echo get_template_directory_uri( ) ?>/assets/icons/symbols.svg#whatsapp" /></svg>
                    ¡Convercemos!
                </a>
            </div>
            <div class="cover__txt__blockquote">
                <blockquote class="jenners-philosophy">
                    <img src="http://jennerui.local/wp-content/uploads/2022/11/PhotoJenner-1080-150x150.png" alt="Jenner Acosta Diaz" class="jenners-philosophy__img">
                    <p class="jenners-philosophy__img__cite">“Queremos mejorar las herramientas que usan los emprendedores para ofrecerles un ecosistema que ayude en su empresa”</p>
                    <a href="#" class="btn-primary">
                        <svg class="svg-icon btn-theme-mode__svg"><use href="<?php echo get_template_directory_uri( ) ?>/assets/icons/symbols.svg#philosophy" /></svg>
                        Mi Filosofía
                    </a>
                </blockquote>
            </div>
        </div>
        <div class="cover__image">
            <picture> 
                <source srcset='http://jennerui.local/wp-content/uploads/2022/11/dog-cover-768x816.png' media='(min-width: 480px)'>
                <img src='http://jennerui.local/wp-content/uploads/2022/11/dog-cover-282x300.png' alt='Dog Coder Espacial'> 
             </picture>
        </div>
    </section>
</main>

<?php get_footer(); ?>