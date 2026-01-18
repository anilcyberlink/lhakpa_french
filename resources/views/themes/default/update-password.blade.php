@extends('themes.default.common.master')
@section('content')
<div class="uk-section small-footer uk-pattern-bg">
    <section style="margin-bottom: 38px;"></section>
    <section class="uk-section small-footer uk-pattern-bg uk-padding-remove-bottom">
        <div class="uk-container uk-flex uk-flex-center">
            <div class="uk-card uk-card-default uk-padding uk-margin-auto-vertical border" style="padding-bottom:60px; width: 678px; max-width: 100% !important;">
                <ul class="uk-login-tab uk-flex-center" uk-tab>
                    <li><a href="#"><i class="fa-solid fa-key login-logo"></i> Mettre à jour le mot de passe </a></li>
                </ul>
                <div class="uk-switcher uk-margin">
                    <div>
                        <form class="uk-contact-form" action="{{route('password.update')}}" method="post">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class=" uk-child-width-1-1@m uk-grid">
                                <div class="uk-margin-small-top">
                                    <label class="uk-form-label uk-text-bold" for="user_email">Adresse email</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="user_email" placeholder="Veuillez saisir votre adresse e-mail valide." name="email" value="{{ $email }}" readonly required type="email">
                                    </div>
                                </div>
                                <div class="uk-margin-small-top">
                                    <label class="uk-form-label uk-text-bold" for="pwd">Nouveau mot de passe</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="pwd" name="password" required type="password">
                                    </div>
                                </div>
                                <div class="uk-margin-small-top">
                                    <label class="uk-form-label uk-text-bold" for="c_pwd">Confirmez le mot de passe</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="c_pwd" name="password_confirmation" required type="password">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-margin-top uk-text-center">
                                <button type="submit" class="uk-btn uk-btn-secondary">Soumettre <span uk-icon="chevron-right"></span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
