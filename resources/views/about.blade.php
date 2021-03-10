@extends('layouts.app')

@section('content') 
<!-- Search form -->
<div class="row tm-row">
                <div class="col-12">
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form">                
                        <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>                                
                    </form>
                </div>                
            </div>
            @foreach ($abouts as $item)            
            <div class="row tm-row tm-mb-45">
                <div class="col-12">
                    <hr class="tm-hr-primary tm-mb-55">
                    <img src={{($item -> image)}} alt="Image" class="img-fluid">
                </div>
            </div>
           
            <div class="row tm-row tm-mb-40">
                <div class="col-12">                    
                    <div class="mb-4">
                        <h2 class="pt-2 tm-mb-40 tm-color-primary tm-post-title">{{($item -> title)}}</h2>
                        <p>
                            You can immediately download 
                                <a rel="nofollow" href="https://templatemo.com/tm-553-xtra-blog" target="_blank">Xtra Blog Template</a> 
                                {{($item -> description)}}
                        </p>                            
                    </div>                    
                </div>
            </div>
            @endforeach
            <div class="row tm-row tm-mb-120">
                <div class="col-lg-4 tm-about-col">
                    <div class="tm-bg-gray tm-about-pad">
                        <div class="text-center tm-mt-40 tm-mb-60">
                            <i class="fas fa-bezier-curve fa-4x tm-color-primary"></i>                            
                        </div>                        
                        <h2 class="mb-3 tm-color-primary tm-post-title">Background</h2>
                        <p class="mb-0 tm-line-height-short">
                            Phasellus pulvinar nisl ornare leo porttitor, et vestibulum lorem semper. 
                            Duis risus ex, molestie sit amet magna in,
                            pharetra pellentesque est. Curabitur elit metus.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 tm-about-col">
                    <div class="tm-bg-gray tm-about-pad">
                        <div class="text-center tm-mt-40 tm-mb-60">
                            <i class="fas fa-users-cog fa-4x tm-color-primary"></i>                            
                        </div>                        
                        <h2 class="mb-3 tm-color-primary tm-post-title">Teamwork</h2>
                        <p class="mb-0 tm-line-height-short">
                            Suspendisse ullamcorper, mi vel molestie ornare, arcu magna euismod ipsum, in malesuada nulla magna ut enim. 
                            Morbi lacinia magna sed auctor, vitae nunc cursus.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 tm-about-col">
                    <div class="tm-bg-gray tm-about-pad">
                        <div class="text-center tm-mt-40 tm-mb-60">
                            <i class="fab fa-creative-commons-sampling fa-4x tm-color-primary"></i>                            
                        </div>                        
                        <h2 class="mb-3 tm-color-primary tm-post-title">Our Core Value</h2>
                        <p class="mb-0 tm-line-height-short">
                            Nunc mi ante, suscipit vel dapibus et, volutpat sit amet ante. In tempor nec sem vitae varius. Aliquam tincidunt orci sem, et imperdiet massa consectetur nec.
                        </p>
                    </div>
                </div>
            </div>            
            <div class="row tm-row tm-mb-60">
                <div class="col-12">
                    <hr class="tm-hr-primary  tm-mb-55">
                </div>                
                <div class="col-lg-6 tm-mb-60 tm-person-col">
                    <div class="media tm-person">
                        <img src="img/orin1.jpeg" width= "160px"alt="Image" class="img-fluid mr-4">
                        <div class="media-body">
                            <h2 class="tm-color-primary tm-post-title mb-2">Qorina Anindhita</h2>
                            <h3 class="tm-h3 mb-3">CEO/Founder</h3>
                            <p class="mb-0 tm-line-height-short">
                                Aliquam non vulputate lectus, vel ultricies diam. Suspendisse at ipsum
                                hendrerit, vestibulum mi id, mattis tortor.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 tm-mb-60 tm-person-col">
                    <div class="media tm-person">
                        <img src="img/orin2.jpeg" width= "150px" alt="Image" class="img-fluid mr-4">
                        <div class="media-body">
                            <h2 class="tm-color-primary tm-post-title mb-2">Anin Cake</h2>
                            <h3 class="tm-h3 mb-3">Project Director</h3>
                            <p class="mb-0 tm-line-height-short">
                                Quisque in bibendum elit, in egestas turpis. Vestibulum ornare sollicitudin congue. 
                                Aliquam lorem mi, maximus at iaculis ut.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 tm-mb-60 tm-person-col">
                    <div class="media tm-person">
                        <img src="img/rara1.jpeg" width= "140px" alt="Image" class="img-fluid mr-4">
                        <div class="media-body">
                            <h2 class="tm-color-primary tm-post-title mb-2">Mutiara Rahmanda</h2>
                            <h3 class="tm-h3 mb-3">Supervisor</h3>
                            <p class="mb-0 tm-line-height-short">
                                Maecenas eu mi eu dui cursus consequat non eu metus. Morbi ac
                                turpis eleifend, commodo purus eget, commodo mauris.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 tm-mb-60 tm-person-col">
                    <div class="media tm-person">
                        <img src="img/rara2.jpeg" width= "170px" alt="Image" class="img-fluid mr-4">
                        <div class="media-body">
                            <h2 class="tm-color-primary tm-post-title mb-2">Tri Rizkia</h2>
                            <h3 class="tm-h3 mb-3">Team Leader</h3>
                            <p class="mb-0 tm-line-height-short">
                                Integer eu sapien hendrerit,
                                imperdiet arcu sit amet, sollicitudin ipsum.
                                Phasellus consequat suscipit ligula eget bibendum.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            @endsection