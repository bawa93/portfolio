<template>
    <div>

        <section>
            <h2 class="hidden">
                Who am I?
            </h2>

        <div class="columns">
            <div class="hero__intro column has-text-black" >
                <span class="hero__intro--hello">

                    Hello

                </span>
                <div class="hero__intro--who" >
                    I'M
                </div>
                <div class="hero__intro--fname">
                    Lakhveer
                </div>
                <div  class="hero__intro--nlame">
                    Bawa
                </div>
                <div>Full Stack Web Developer</div>
            </div>

            <div class="hero__image column">
                <img src="/hero.png" alt="Lakhveer Bawa Image" class="hero__img" >
            </div>
        </div>
        </section>
    </div>
</template>

<script>
export default  {

}
</script>

<style>
    .columns {
    }

    .hero__intro.column.has-text-black {
        text-align: right;
        padding-right: 45px;
        text-transform: uppercase;
    }

    .hero__intro--hello {
        font-size: 24px;
        border-bottom: 1px solid #202020;
    }

    .hero__intro--who {
        font-size: 38px;
        letter-spacing: 4px;
    }

    .hero__intro--fname {
        font-size: 38px;
        font-weight: bold;
        letter-spacing: 4px;
    }

    .hero__intro--nlame {
        font-size: 38px;
        font-weight: bold;
        letter-spacing: 4px;
    }

    .hero__image.column {
        min-height: 422px;
        overflow: hidden;
        position: relative;
    }

    .hero__img {
        max-width: 300px;
        position: absolute;
        top: 1%;
        z-index: 9999;
    }
</style>