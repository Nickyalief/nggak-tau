@extends('halamanutama')

@section('container')
    
<style>
    /* team */
section{
    
}
.row {
    display: flex;
    flex-wrap: wrap;
    padding: 2em 1em;
    text-align: center;
}

.column {
    width: 100%;
    padding: 0.6rem 0;
}

.team {
    width: 100%;
    text-align: center;
    font-size: 3em;
    color: #1f003b;
}

.card {
    align-content: center;
    width: 100%;
    box-shadow: 0 0 2.4em rgba(25, 0, 58, 0.1);
    padding: 3.5em 1em;
    border-radius: 0.6em;
    color: #1f003b;
    cursor: pointer;
    transition: 0.3s;
    background-color: #ffffff;
}

.card .img-container {
    width: 8em;
    height: 8em;
    background-color: #a993ff;
    padding: 0.5em;
    border-radius: 50%;
    margin: 0 auto 2em auto;
}

.card img {
    width: 100%;
    border-radius: 50%;
}

.card h3 {
    font-weight: 500;
}

.card p {
    font-weight: 300;
    text-transform: uppercase;
    margin: 0.5em 0 2em 0;
    letter-spacing: 2px;
}

.icons {
    width: 50%;
    min-width: 180px;
    margin: auto;
    display: flex;
    justify-content: space-between;
}

.card a {
    text-decoration: none;
    color: inherit;
    font-size: 1.4em;
}

.card:hover {
    background: linear-gradient(#6045ea, #8567f7);
    color: #ffffff;
    transition: transform .5s;
}

.card:hover .img-container {
    transform: scale(1.15);
}
    @media screen and (min-width: 768px) {
        section {
            padding: 1em 7em;
        }
    }

    @media screen and (min-width: 992px) {
        section {
            padding: 1em;
        }

        .card {
            padding: 5em 1em;
        }

        .column {
            flex: 0 0 33.33%;
            max-width: 33.33%;
            padding: 0 1em;
            padding-bottom: 2em;
        }
    }
</style>
   <!-- about -->
   <section>
    <div class="row">
        <h1 class="team">‎ </h1>
    </div>
    <section class="row">
        <!-- Column 1-->
        <div class="container">
            <div class="card">
                <div class="img-container">
                    <img src="img/NIckyAliefWahyuP.jpeg" />
                </div>
                <h3>Nicky Alief Wahyu Pradana</h3>
                <p>Rekayasa Perangkat Lunak</p>
                <div class="icons">
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/nicky_alief/" target="_blank">
                        <i class="fab fa-instagram px-2"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-youtube px-2"></i>
                    </a>
                    <a href="https://wa.me/6285739226484" target="_blank">
                        <i class="fab fa-facebook-f px-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>    
        <!-- ends team -->

        
@endsection