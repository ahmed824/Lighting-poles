<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back to Top Button</title>
    <style>
        .top-btn {
            width: 50px;
            height: 50px;
            background: linear-gradient(rgba(48, 36, 174, 0.8), rgba(224, 231, 255, 0.8)),
                var(--secondary-color);

            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            bottom: 15px;
            left: 15px;
            cursor: pointer;
            z-index: 1000;
            border: none;
             transition: all 0.3s ease;
            overflow: hidden;
            opacity: 1;
            /* Ensure initial opacity */
        }

        .inner-ring {
            position: absolute;
            width: 75%;
            height: 75%;
            border: 1.5px solid var(--text-light);
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .top-icon {
            width: 40%;
            height: 40%;
            transition: all 0.3s ease;
        }

        .top-icon svg {
            width: 100%;
            height: 100%;
            fill: var(--text-light);
        }

        .top-btn:hover {
            width: 120px;
            border-radius: 50px;
            /* background: var(--accent-color); */
        }

        .top-btn:hover .top-icon {
            transform: translateY(-200%);
        }

        .top-btn:hover .inner-ring {
            width: 100px;
            border-radius: 45%;
            border-width: 1px;
        }

        .top-btn::before {
            content: "Back to Top";
            position: absolute;
            color: var(--text-light);
            font-size: 0;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .top-btn:hover::before {
            font-size: 12px;
            opacity: 1;
        }

        .top-btn.clicked::before {
            font-size: 0;
            opacity: 0;
        }

        /* 📱 Small devices */
        @media (max-width: 576px) {
            .top-btn {
                width: 50px;
                height: 50px;
                bottom: 10px;
                left: 10px;
            }

            .inner-ring {
                border-width: 1px;
            }

            .top-icon {
                width: 45%;
                height: 45%;
            }
        }

        /* 💻 Large screens */
        @media (min-width: 1400px) {
            .top-btn {
                width: 60px;
                height: 60px;
                bottom: 20px;
                left: 20px;
            }
        }
    </style>
</head>

<body>
    <button class="top-btn" id="backToTop">
        <div class="inner-ring"></div>
        <div class="top-icon">
            <svg viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z" />
            </svg>
        </div>
    </button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            gsap.registerPlugin(ScrollTrigger);

            const btn = document.querySelector('.top-btn');
            const ring = document.querySelector('.inner-ring');

            // Ensure initial opacity is set
            gsap.set(btn, { opacity: 1 });

            // Fade + scale on scroll
            gsap.fromTo(btn,
                { opacity: 0, scale: 0.8 },
                {
                    opacity: 1,
                    scale: 1,
                    duration: 0.8,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: btn,
                        start: 'top 85%',
                        toggleActions: 'play none none reverse'
                    }
                }
            );

            // Hover animation
            btn.addEventListener('mouseenter', () => {
                gsap.to(btn, {
                    scale: 1.08,
                    boxShadow: '0 8px 20px rgba(48, 36, 174, 0.5)',
                    duration: 0.4,
                    ease: "power2.out"
                });
                gsap.to(ring, {
                    scale: 1.05,
                    duration: 0.4,
                    ease: "power2.out"
                });
            });

            btn.addEventListener('mouseleave', () => {
                gsap.to(btn, {
                    scale: 1,
                    boxShadow: '0 20px 40px rgba(48, 36, 174, 0.15)',
                    duration: 0.4,
                    ease: "power2.inOut"
                });
                gsap.to(ring, {
                    scale: 1,
                    duration: 0.4,
                    ease: "power2.inOut"
                });
                btn.classList.remove('clicked');
            });

            // Click → smooth scroll + hide text
            btn.addEventListener('click', () => {
                window.scrollTo({ top: 0, behavior: "smooth" });
                btn.classList.add('clicked');
            });

            // Gentle idle motion
            gsap.to(btn, { y: -4, duration: 2, repeat: -1, yoyo: true, ease: "sine.inOut" });
        });
    </script>
</body>

</html>