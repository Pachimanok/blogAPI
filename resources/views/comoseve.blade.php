@extends('layouts.header')

    <main class="main-content mt-5">
        <section>
            <div class="page-header min-vh-75">
                <div class="container" >
                    <div class="row mt-5">
                        <div class="col-xl-9 col-lg-10 col-md-11 d-flex flex-column mx-auto">
                            @php  echo $como @endphp
                            {{ $como}}
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
    </main>
    @extends('layouts.footer')



