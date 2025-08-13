<!-- Join Us Section -->
<section class="join-us-section">
    <div class="container">
        <div class="text-center right-left-border animate-on-scroll">
            <img src="assets/images/dark-logo.png" alt="Logo" class="mb-4 animate-on-scroll">
            <div class="join-title animate-on-scroll">
                <h2 class="display-4 fw-bold mb-3"><span class="dot-line"></span> Join Us Now <span
                        class="dot-line flip-x"></span></h2>
                <p class="lead mb-4">Stay updated with our latest products, projects, and lighting innovations</p>
            </div>

            <div class="join-form">
                <!-- From Uiverse.io by mrhyddenn -->
                <div class="form__group field animate-on-scroll">
                    <input type="input" class="form__field" placeholder="Name" required="">
                    <label for="name" class="form__label">email address</label>
                </div>

                <button class="email-submit-btn animate-on-scroll" onclick="sendEmail(this)">
                    <span class="email-submit-text">Subscribe</span>
                    <i class="fas fa-paper-plane send-icon"></i>
                </button>


            </div>
        </div>
    </div>
</section>

<script>
    function sendEmail(btn) {
        btn.classList.add("active");

        // Remove icon animation after it flies out
        setTimeout(() => {
            btn.classList.remove("active");
        }, 700);
    }


</script>