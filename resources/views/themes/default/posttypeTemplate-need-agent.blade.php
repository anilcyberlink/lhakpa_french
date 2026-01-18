@extends('themes.default.common.master')
@section('title', $data->post_type)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('thumbnail', $data->banner)
@section('content')

<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" uk-height-viewport data-src="{{ $data->banner ? asset('uploads/original/'.$data->banner) : asset('theme-assets/img/mountain/mountain9.jpeg') }}" alt="{{ $data->post_type }}" uk-img>
    <div class="uk-overlay-banner uk-position-cover"></div>
    <div class="uk-container uk-width-1-1 pt-150 uk-position-relative">
        <div class="uk-flex uk-flex-middle uk-grid-collapse " uk-grid>
            <div class="uk-width-1-1@m">
                <ul class="uk-breadcrumb">
                    <li><a href="{{ url('/') }}" class="uk-white">Accueil</a></li>
                    <li><span class="uk-secondary">{{ $data->post_type }}</span></li>
                </ul>
                <div class="uk-sub-banner-font">
                    <h1>{{ $data->sub_title }}</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=" uk-light-bg">
    <div class="uk-container">
        <div class="uk-grid-collapse uk-grid" >
            <div class="uk-width-1-3@m uk-flex uk-flex-center">
                <div >
                <!--<img src="{{ $data->banner ? asset('uploads/original/'.$data->banner) : asset('theme-assets/img/mountain/mountain8.jpeg') }}" class="cover uk-same-height" alt="{{ $data->post_type }}">-->
                <img src="{{ asset('theme-assets/img/logo.gif') }}" class="cover" alt="{{ $data->post_type }}" style="    height: 245px;margin-top: 68px;" uk-sticky="end: true; offset:100;">
                </div>
            </div>
            <div class="uk-width-2-3@m uk-same-height">
                <div class="uk-title-font  uk-container uk-section uk-padding-large">
                    <h1 class="uk-secondary">{{$data->associated_title}}</h1>
                    <span class="dotted-line-primary"></span>
                    <p>
                        {!! $data->content !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="uk-section">
    <div class="uk-container">
        <h2 class="uk-primary uk-margin-remove">Demandez un guide expert</h2>
        <span class="dotted-line-black"></span>
        <p>Commencez à planifier votre évasion et parlez-nous de vos projets de voyage ; l’un de nos conseillers spécialisés dans la destination vous contactera rapidement. Nous vous contacterons pour discuter de votre prochaine aventure.</p>
        <div class="uk-grid">
            <div class="uk-width-3-4@m">
                <div>
                    <form action="{{ route('need.agent') }}" method="post">
                        @csrf
                        <input type="hidden" id="g_recaptcha_response" name="g_recaptcha_response"/>
                        <div class="uk-child-width-1-2@m uk-grid uk-margin-remove-top">
                            <div class="uk-margin-small-top">
                                <label class="uk-form-label uk-text-bold" for="url">Adresse URL de l'entreprise*</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="url" name="url" required type="text">
                                </div>
                            </div>
                            <div class="uk-margin-small-top">
                                <label class="uk-form-label uk-text-bold" for="cname">Nom de l'entreprise*</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="cname" name="cname" required type="text">
                                </div>
                            </div>
                            <div class="uk-margin-small-top">
                                <label class="uk-form-label uk-text-bold" for="code">Code Postal*</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="code" name="code" required type="text">
                                </div>
                            </div>
                            <div class="uk-margin-small-top">
                                <label class="uk-form-label uk-text-bold" for="fcountry">Pays*</label>
                                <select name="country" class="uk-select" aria-label="Select" id="country" required>
                                    @include('themes.default.common.country')
                                </select>
                            </div>
                            <div class="uk-margin-small-top">
                                <label class="uk-form-label uk-text-bold" for="designation">Désignation*</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="designation" name="designation" required type="text">
                                </div>
                            </div>
                            <div class="uk-margin-small-top">
                                <label class="uk-form-label uk-text-bold" for="name">Nom*</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="name" name="name" required type="text">
                                </div>
                            </div>
                            <div class="uk-margin-small-top">
                                <label class="uk-form-label uk-text-bold" for="emails">Email*</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="email" name="email" required type="email">
                                </div>
                            </div>

                            <div class="uk-margin-small-top">
                                <label class="uk-form-label uk-text-bold" for="phone">Contact*</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="phone" name="phone" required type="number">
                                </div>
                            </div>
                        </div>
                        <div class="uk-margin-small-top">
                            <label class="uk-form-label uk-text-bold" for="contact">Exigence spéciale</label>
                            <div class="uk-form-controls">
                                <textarea name="message" class="uk-textarea" rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="uk-margin-top uk-text-center">
                            {{-- <a href="" class="uk-btn uk-btn-secondary">Submit Now <span uk-icon="chevron-right"></span></a> --}}
                            <button type="submit" class="uk-btn uk-btn-secondary ">Soumettre<span uk-icon="chevron-right"></span></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="uk-width-1-4@m">
                <div class="uk-light-bg uk-title-font uk-padding-small border uk-margin-top">
                    <h3 class="uk-primary uk-margin-remove">VISITEZ-NOUS</h3>
                    <div class="uk-flex uk-flex-middle  uk-margin-small-top">
                        <i class="fa-solid fa-location-dot uk-secondary uk-margin-small-right f-20"></i>
                        <div>
                            <p class="text-white fw-500 uk-margin-remove f-14">ADRESSE: <br>
                                {{$setting->address}}</p>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-middle uk-margin-small-top">
                        <i class="fa-solid fa-envelope uk-secondary uk-margin-small-right f-20"></i>
                        <div>
                            <p class="text-white fw-500 uk-margin-remove f-14">EMAIL: <br>
                                {{$setting->email_primary}}</p>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-middle  uk-margin-small-top">
                        <i class="fa-solid fa-phone uk-secondary uk-margin-small-right f-20"></i>
                        <div>
                            <p class="text-white fw-500 uk-margin-remove f-14">PHONE: <br>
                            {{$setting->phone}}</p>
                        </div>
                    </div>
                </div>
                @php
                    $contactUs = 'contact-us';
                @endphp
                <div class="uk-secondary-bg uk-book-btn border uk-margin-small-top">
                    <a href="{{route('page.posttype_detail',$contactUs)}}">Contactez-nous</a>
                </div>
            </div>
        </div>
    </div>
</section>

@if ($reviews->isNotEmpty())
    <!-- review section start-->
    <section class="uk-primary-bg">
      <div class="uk-child-width-1-2@m uk-grid-match uk-grid-collapse" uk-grid>
         <div>
            <img src="{{asset('theme-assets/img/review.jpeg')}}" style="height:100%; object-fit:cover;">
         </div>
         <div class="uk-primary-bg uk-padding uk-padding-left uk-about-text uk-index-responsive-padding" style="line-break: anywhere;">
               <div class="uk-container uk-flex uk-flex-middle uk-margin-top">
                  <div class="uk-width-1-1">
                     <span class="uk-white dotted-line-white"><i class="fa-solid fa-person-hiking uk-margin-small-right"></i>VOYAGEZ AVEC NOUS</span>
                     <h1 class="uk-secondary  uk-margin-remove" style="font-size:2rem;">Ce que disent les gens</h1>
                     <div uk-slider="autoplay : true; autoplay-interval: 6000; pause-on-hover: true; finite: false;">
                           <div class="uk-position-relative uk-visible-toggle" tabindex="-1">
                              <div class="uk-slider-items">
                                 @foreach ($reviews as $value)
                                       <div class="uk-width-1-1">
                                          <div class="uk-star-rating">
                                             @for($i=0; $i < $value->rating; $i++)
                                                <i class="fa-solid fa-star"></i>
                                             @endfor
                                          </div>
                                           <span class=" uk-contents">
                                             <p  id="text" class="message-container uk-margin-top">
                                             {{ $value->message }}
                                             </p>
                                             <button id="" class="read-more-btn">En savoir plus </button>
                                              </span>
                                             <div class="uk-flex uk-margin-top">
                                                <img src="{{$value->image ? asset('uploads/reviews/'.$value->image) : asset('theme-assets/img/user.png')}}" class="uk-testimonial-img" alt="">
                                                <div class="uk-title-font">
                                                   <h2 class="uk-secondary">{{ $value->full_name }}</h2>
                                                   <span class="uk-white">{{ $value->country }}</span>
                                                  @if(trip_count($value->user_id) >= 1)
                                                   <p class="uk-white uk-margin-top"> {{trip_count($value->user_id)}} voyage avec Lhakpa Treks</p>
                                                   @endif
                                                </div>
                                             </div>
                                       </div>
                                 @endforeach

                              </div>

                              <ul class="uk-slider-nav uk-dotnav uk-flex uk-flex-center"></ul>
                           </div>
                     </div>
                     <div class="uk-margin-medium-top uk-text-center">
                        <a href="{{route('all-review')}}" class="uk-btn uk-btn-primary" >Afficher tous les avis</a>
                    </div>
                  </div>
               </div>
         </div>

      </div>
    </section>
@endif
<style>
       .message-container {
            display: -webkit-box;
            -webkit-line-clamp: 5;        /* number of lines */
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .message-container.expanded {
            -webkit-line-clamp: unset;
        }

        .read-more-btn {
            background: none;
            border: none;
            color: #1e87f0;
            cursor: pointer;
            padding: 0;
            font-weight: 600;
        }

   </style>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.message-container').forEach((text) => {
            const btn = text.nextElementSibling;

            // Show button only if text is actually truncated
            if (text.scrollHeight > text.clientHeight) {
                btn.hidden = false;
            }

            btn.addEventListener('click', () => {
                text.classList.toggle('expanded');
                btn.textContent = text.classList.contains('expanded')
                    ? 'Lire moins'
                    : 'En savoir plus';
            });
        });
    });
  </script>
@endsection
