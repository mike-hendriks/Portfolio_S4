<?php include_once('./src/views/components/header.php'); ?>
    <main class="course">
        <div class="container-fluid">
            <div class="row">
                <div class="col s12">
                    <h1>The Parkinson Project</h1>
                </div>
            </div>
            <div class="row">

                <!-- Proftaak -->
                <div class="col m4 assignment offset-m1 has_overlay fade_on_load odd">
                    <div class="overlay_container">
                        <div class="block_overlay"></div>
                    </div>
                    <a href="/assignment/{{ $assignment->slug }}">
                        <div class="image_container">
                            <img src="./public/images/ptm.png" alt="" class="img-responsive">
                        </div>
                        <div class="content_container">
                            <h2>Proftaak</h2>
                        </div>
                    </a>
                </div>

                <!-- SCO -->
                <div class="col m4 assignment offset-m1 has_overlay fade_on_load">
                    <div class="overlay_container">
                        <div class="block_overlay"></div>
                    </div>
                    <a href="/assignment/{{ $assignment->slug }}">
                        <div class="image_container">
                            <img src="./public/images/sco.png" alt="" class="img-responsive">
                        </div>
                        <div class="content_container">
                            <h2>Strategie & Concepting</h2>
                        </div>
                    </a>
                </div>

                <!-- UX -->
                <div class="col m4 assignment offset-m1 has_overlay fade_on_load odd">
                    <div class="overlay_container">
                        <div class="block_overlay"></div>
                    </div>
                    <a href="/assignment/{{ $assignment->slug }}">
                        <div class="image_container">
                            <img src="./public/images/ux.png" alt="" class="img-responsive">
                        </div>
                        <div class="content_container">
                            <h2>User Experience</h2>
                        </div>
                    </a>
                </div>

                <!-- Dev -->
                <div class="col m4 assignment offset-m1 has_overlay fade_on_load">
                    <div class="overlay_container">
                        <div class="block_overlay"></div>
                    </div>
                    <a href="/assignment/{{ $assignment->slug }}">
                        <div class="image_container">
                            <img src="./public/images/dev.png" alt="" class="img-responsive">
                        </div>
                        <div class="content_container">
                            <h2>Development</h2>
                        </div>
                    </a>
                </div>

            </div>
        </div>

    </main>
<?php include_once('./src/views/components/footer.php'); ?>

