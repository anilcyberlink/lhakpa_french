@extends('themes.default.common.master')
@section('content')

<section
    class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed"
    style="height:400px;" data-src="{{asset('theme-assets/img/mountain/mountain8.jpeg')}}" uk-img>
    <div class="uk-overlay-banner uk-position-cover"></div>
    <div class="uk-container uk-width-1-1 pt-150 uk-position-relative">
        <div class="uk-flex uk-flex-middle uk-flex-center uk-grid-collapse " uk-grid>
            <div class="uk-width-1-1@m">
                <div class="uk-sub-banner-font uk-text-center">
                    <h2 class="uk-secondary">FEEDBACK FORM</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="uk-section ">
    <div class="uk-container">
        <div class="form-container">
            <div class="form-header">
                <h1 class="uk-white">️ Lhakpa Trekking Feedback Form</h1>
                <p class="subtitle">We truly value your feedback. Your comments help us improve and keep offering high-quality, safe, and memorable adventures in the Himalayas. Thank you for taking the time to share your experience!</p>
            </div>
            <form action="{{ route('post_feedback') }}" method="POST" id="feedbackForm">
                @csrf
                <input type="hidden" id="g_recaptcha_response" name="g_recaptcha_response" />
                <div class="form-body">
                    <div class="section-header"><span class="emoji-icon">01. </span>About Your Trek</div>

                    <div class="uk-grid-small" uk-grid>
                        <div class="uk-width-1-2@s">
                            <label>Trip Name / Region</label>
                            <div class="input-group">
                                <input class="uk-input" name="trip" type="text" placeholder="e.g., Everest Base Camp" required>
                            </div>
                        </div>
                        <div class="uk-width-1-2@s">
                            <label>Departure Date</label>
                            <div class="input-group">
                                <input class="uk-input" name="departure" type="date" required>
                            </div>
                        </div>
                    </div>

                    <div class="uk-grid-small uk-margin-top" uk-grid>
                        <div class="uk-width-1-2@s">
                            <label>Guide's Name</label>
                            <div class="input-group">
                                <input class="uk-input" type="text" name="guide_name" placeholder="Enter guide's name" required>
                            </div>
                        </div>
                        <div class="uk-width-1-2@s">
                            <label>Your Name (Optional)</label>
                            <div class="input-group">
                                <input class="uk-input" type="text" name="full_name" placeholder="Enter your name">
                            </div>
                        </div>
                    </div>

                    <div class="uk-margin-top">
                        <label>Nationality</label>
                        <div class="input-group">
                            <input class="uk-input" type="text" name="nationality" placeholder="Enter your nationality" required>
                        </div>
                    </div>

                    <div class="section-header"><span class="emoji-icon">02. </span>Overall Satisfaction</div>

                    <div class="rating-group">
                        <span class="rating-label">How would you rate your overall trekking experience with us?</span>
                        <div class="rating-options">
                            <input type="radio" name="overall" value="excellent" id="overall-excellent" required>
                            <label for="overall-excellent">Excellent</label>

                            <input type="radio" name="overall" value="very-good" id="overall-verygood">
                            <label for="overall-verygood">Very Good</label>

                            <input type="radio" name="overall" value="good" id="overall-good">
                            <label for="overall-good">Good</label>

                            <input type="radio" name="overall" value="fair" id="overall-fair">
                            <label for="overall-fair">Fair</label>

                            <input type="radio" name="overall" value="poor" id="overall-poor">
                            <label for="overall-poor">Poor</label>
                        </div>
                    </div>

                    <div class="rating-group">
                        <span class="rating-label">How would you rate the guide(s)?</span>
                        <div class="rating-options">
                            <input type="radio" name="guide" value="excellent" id="guide-excellent" required>
                            <label for="guide-excellent">Excellent</label>

                            <input type="radio" name="guide" value="very-good" id="guide-verygood">
                            <label for="guide-verygood">Very Good</label>

                            <input type="radio" name="guide" value="good" id="guide-good">
                            <label for="guide-good">Good</label>

                            <input type="radio" name="guide" value="fair" id="guide-fair">
                            <label for="guide-fair">Fair</label>

                            <input type="radio" name="guide" value="poor" id="guide-poor">
                            <label for="guide-poor">Poor</label>
                        </div>
                    </div>

                    <div class="rating-group">
                        <span class="rating-label">How would you rate the porter(s) / support staff?</span>
                        <div class="rating-options">
                            <input type="radio" name="porter" value="excellent" id="porter-excellent" required>
                            <label for="porter-excellent">Excellent</label>

                            <input type="radio" name="porter" value="very-good" id="porter-verygood">
                            <label for="porter-verygood">Very Good</label>

                            <input type="radio" name="porter" value="good" id="porter-good">
                            <label for="porter-good">Good</label>

                            <input type="radio" name="porter" value="fair" id="porter-fair">
                            <label for="porter-fair">Fair</label>

                            <input type="radio" name="porter" value="poor" id="porter-poor">
                            <label for="porter-poor">Poor</label>
                        </div>
                    </div>

                    <div class="rating-group">
                        <span class="rating-label">How would you rate the quality of accommodation and meals?</span>
                        <div class="rating-options">
                            <input type="radio" name="accommodation" value="excellent" id="accommodation-excellent" required>
                            <label for="accommodation-excellent">Excellent</label>

                            <input type="radio" name="accommodation" value="very-good" id="accommodation-verygood">
                            <label for="accommodation-verygood">Very Good</label>

                            <input type="radio" name="accommodation" value="good" id="accommodation-good">
                            <label for="accommodation-good">Good</label>

                            <input type="radio" name="accommodation" value="fair" id="accommodation-fair">
                            <label for="accommodation-fair">Fair</label>

                            <input type="radio" name="accommodation" value="poor" id="accommodation-poor">
                            <label for="accommodation-poor">Poor</label>
                        </div>
                    </div>

                    <div class="rating-group">
                        <span class="rating-label">Would you recommend Lhakpa Trekking Private Limited to friends or family?</span>
                        <div class="rating-options">
                            <input type="radio" name="recommend" value="yes" id="recommend-yes" required>
                            <label for="recommend-yes">Yes, definitely</label>

                            <input type="radio" name="recommend" value="maybe" id="recommend-maybe">
                            <label for="recommend-maybe">Maybe</label>

                            <input type="radio" name="recommend" value="no" id="recommend-no">
                            <label for="recommend-no">No</label>
                        </div>
                    </div>

                    <div class="uk-margin-top">
                        <label>What did you enjoy most?</label>
                        <textarea class="uk-textarea" rows="4" name="favourite" placeholder="Share your favorite moments from the trek..." required></textarea>
                    </div>

                    <div class="uk-margin-top">
                        <label>What could we improve?</label>
                        <textarea class="uk-textarea" rows="4" name="improvement" required></textarea>
                    </div>

                    <div class="section-header"><span class="emoji-icon">03. </span>The Guide & Staff</div>

                    <div class="uk-margin">
                        <label>Was your guide professional and attentive?</label>
                        <textarea class="uk-textarea" name="guide_professionalism" rows="2" required></textarea>
                    </div>

                    <div class="uk-margin">
                        <label>Did the guide share interesting local culture & nature information?</label>
                        <textarea class="uk-textarea" name="guide_knowledge" rows="2" required></textarea>
                    </div>

                    <div class="uk-margin">
                        <label>How was the support from porters & local staff?</label>
                        <textarea class="uk-textarea" name="porter_support" rows="2" required></textarea>
                    </div>

                    <div class="uk-margin">
                        <label>Comments:</label>
                        <textarea class="uk-textarea" name="comments" rows="3" required></textarea>
                    </div>

                    <div class="section-header">
                        <span class="emoji-icon">04. </span>Detailed checklist (can select all that apply)
                    </div>
                    <div class="uk-margin-top">
                        <label>Please tick what applied to your guide:</label>
                        <div id="guide-error" style="display:none; color:#e74c3c; margin-bottom:10px; font-weight:bold;">
                            ⚠️ Please select at least one option
                        </div>

                        <div class="checklist-group">
                            <div class="checklist-item">
                                <input type="checkbox" name="guide_qualities[]" value="punctual" id="punctual">
                                <label for="punctual">Punctual and organized</label>
                            </div>

                            <div class="checklist-item">
                                <input type="checkbox" name="guide_qualities[]" value="prepared" id="prepared">
                                <label for="prepared">Well-prepared with knowledge and equipment</label>
                            </div>

                            <div class="checklist-item">
                                <input type="checkbox" name="guide_qualities[]" value="respectful" id="respectful">
                                <label for="respectful">Respectful and polite</label>
                            </div>

                            <div class="checklist-item">
                                <input type="checkbox" name="guide_qualities[]" value="safety" id="safety">
                                <label for="safety">Maintained safety and clear communication</label>
                            </div>

                            <div class="checklist-item">
                                <input type="checkbox" name="guide_qualities[]" value="cultural" id="cultural">
                                <label for="cultural">Provided cultural and local insights</label>
                            </div>
                        </div>

                        <div class="uk-margin-top">
                            <input class="uk-input" type="text" name="guide_qualities_other" placeholder="Other qualities (please specify)">
                        </div>
                    </div>

                    <div class="uk-margin-top">
                        <label>What mark, between 1 and 20, would you give to the guide's professionalism?</label>
                        <div class="score-input">
                            <input class="uk-input" type="number" name="guide_score" min="1" max="20" placeholder="0" required>
                            <span>/ 20</span>
                        </div>
                    </div>

                    <div class="section-header"><span class="emoji-icon">05. </span>Memorable Moments / Highlights</div>

                    <div class="uk-margin">
                        <label>Share a quote, story, or photo we may publish (with your permission)</label>
                        <textarea class="uk-textarea" rows="5" name="story" required></textarea>
                    </div>

                    <div class="section-header"><span class="emoji-icon">06. ️</span>Future Treks</div>

                    <div class="rating-group">
                        <span class="rating-label">Would you like us to inform you about future treks, special offers, or new itineraries?</span>
                        <div class="rating-options">
                            <input type="radio" name="newsletter" value="yes" id="newsletter-yes" required>
                            <label for="newsletter-yes">Yes, please</label>

                            <input type="radio" name="newsletter" value="no" id="newsletter-no">
                            <label for="newsletter-no">No, thank you</label>
                        </div>
                    </div>

                    <div class="uk-margin-top">
                        <label>If yes, please share your email (optional):</label>
                        <input class="uk-input" type="email" name="email" placeholder="your.email@example.com">
                    </div>

                    <div class="uk-margin-top">
                        <label>Future treks or destinations you are interested in:</label>
                        <div id="dest-error" style="display:none; color:#e74c3c; margin-bottom:10px; font-weight:bold;">
                            ⚠️ Please select at least one destination
                        </div>

                        <div class="checklist-group">
                            <div class="checklist-item">
                                <input type="checkbox" name="future_destinations[]" value="everest" id="everest">
                                <label for="everest">Everest region</label>
                            </div>

                            <div class="checklist-item">
                                <input type="checkbox" name="future_destinations[]" value="annapurna" id="annapurna">
                                <label for="annapurna">Annapurna region</label>
                            </div>

                            <div class="checklist-item">
                                <input type="checkbox" name="future_destinations[]" value="mustang" id="mustang">
                                <label for="mustang">Mustang</label>
                            </div>

                            <div class="checklist-item">
                                <input type="checkbox" name="future_destinations[]" value="dolpo" id="dolpo">
                                <label for="dolpo">Dolpo</label>
                            </div>

                            <div class="checklist-item">
                                <input type="checkbox" name="future_destinations[]" value="bhutan_tibet" id="bhutan">
                                <label for="bhutan">Bhutan / Tibet</label>
                            </div>
                        </div>

                        <div class="uk-margin-top">
                            <input class="uk-input" type="text" name="future_destinations_other" placeholder="Other destinations you'd like to explore" >
                        </div>
                    </div>

                    <hr>

                    <div class="uk-margin-top">
                        <label>How did you hear about us?</label>

                        <div class="rating-group">
                            <div class="rating-options">
                                <input type="radio" name="heard_about" value="website" id="heard-website" required>
                                <label for="heard-website">Website</label>

                                <input type="radio" name="heard_about" value="social_media" id="heard-social">
                                <label for="heard-social">Social media</label>

                                <input type="radio" name="heard_about" value="friend" id="heard-friend">
                                <label for="heard-friend">Friend / recommendation</label>

                                <input type="radio" name="heard_about" value="previous_trip" id="heard-previous">
                                <label for="heard-previous">Previous trip with us</label>

                                <input type="radio" name="heard_about" value="travel_fair" id="heard-fair">
                                <label for="heard-fair">Travel fair / agency</label>

                                <input type="radio" name="heard_about" value="other" id="heard-other">
                                <label for="heard-other">Other</label>
                            </div>

                            <input type="text" class="uk-input other-input" name="heard_about_other" placeholder="Please specify..." style="margin-top: 15px; display: none;" >
                        </div>
                    </div>

                    <div class="uk-text-center">
                        <button type="submit" class="inquiry-btn" style="padding: 15px;font-size: 15px;margin-bottom: 17px;">Submit Feedback</button>
                    </div>
                </div>
                <div class="form-header">
                    <h1 class="uk-white">Thank You!</h1>
                    <p class="subtitle">Your feedback supports our mission to deliver safe, authentic, and responsible mountain adventures.</p>
                    <p class="subtitle">We empower local communities and help provide quality education in remote areas.</p>
                </div>
            </form>
        </div>
    </div>
</section>
<script>
    // Show/hide "Other" text input for "How did you hear about us?"
    document.querySelectorAll('input[name="heard_about"]').forEach(radio => {
        radio.addEventListener('change', function() {
            const otherInput = document.querySelector('.other-input');
            if (this.value === 'other' && this.checked) {
                otherInput.style.display = 'block';
                otherInput.required = true;
            } else {
                otherInput.style.display = 'none';
                otherInput.required = false;
                otherInput.value = '';
            }
        });
    });

    // Form validation - scroll to first error
    document.getElementById('feedbackForm').addEventListener('submit', function(e) {
        const groups = [
            {
                name: 'guide_qualities[]',
                errorId: 'guide-error',
                otherInput: 'guide_qualities_other' // Add the "other" input field name
            },
            {
                name: 'future_destinations[]',
                errorId: 'dest-error',
                otherInput: 'future_destinations_other' // Add the "other" input field name
            }
        ];

        let firstError = null;

        groups.forEach(group => {
            const checkboxes = document.querySelectorAll(`input[name="${group.name}"]`);
            const error = document.getElementById(group.errorId);
            const otherField = document.querySelector(`input[name="${group.otherInput}"]`);

            if (!error) return; // Skip if error element doesn't exist

            const anyChecked = Array.from(checkboxes).some(cb => cb.checked);
            const otherFilled = otherField && otherField.value.trim() !== '';

            // Skip validation if either checkboxes are checked OR other field is filled
            if (!anyChecked && !otherFilled) {
                error.style.display = 'block';

                // Store first error for scrolling
                if (!firstError) {
                    firstError = error;
                }
            } else {
                error.style.display = 'none';
            }
        });

        // If there's an error, prevent submit and scroll to it
        if (firstError) {
            e.preventDefault();
            firstError.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
        }
    });

    // Hide error when user checks a box OR fills the other input
    ['guide_qualities[]', 'future_destinations[]'].forEach(name => {
        // Hide error when checkbox is checked
        document.querySelectorAll(`input[name="${name}"]`).forEach(cb => {
            cb.addEventListener('change', () => {
                const errorId = name === 'future_destinations[]' ? 'dest-error' : 'guide-error';
                const error = document.getElementById(errorId);
                if (error) {
                    error.style.display = 'none';
                }
            });
        });

        // Hide error when "other" field is typed in
        const otherFieldName = name === 'future_destinations[]' ? 'future_destinations_other' : 'guide_qualities_other';
        const otherField = document.querySelector(`input[name="${otherFieldName}"]`);

        if (otherField) {
            otherField.addEventListener('input', () => {
                const errorId = name === 'future_destinations[]' ? 'dest-error' : 'guide-error';
                const error = document.getElementById(errorId);
                if (error && otherField.value.trim() !== '') {
                    error.style.display = 'none';
                }
            });
        }
    });
</script>

@stop
