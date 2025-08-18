<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsApp Button</title>
    <style>
        .whatsapp-btn {
            width: 90px;
            height: 90px;
            background-color: #25D366;
            /* WhatsApp green */
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            bottom: 20px;
            right: 20px;
            cursor: pointer;
            z-index: 1000;
            text-decoration: none;
        }


        .inner-ring {
            position: absolute;
            width: 75%;
            height: 75%;
            border: 2px solid white;
            border-radius: 50%;
        }

        .whatsapp-icon {
            width: 40%;
            height: 40%;
        }

        .whatsapp-icon svg {
            width: 100%;
            height: 100%;
            fill: white;
        }

        /* 📱 Small devices */
        @media (max-width: 576px) {
            .whatsapp-btn {
                width: 60px;
                height: 60px;
                bottom: 15px;
                right: 15px;
            }

            .inner-ring {
                border-width: 1.5px;
            }

            .whatsapp-icon {
                width: 50%;
                height: 50%;
            }
        }

        /* 💻 Large screens */
        @media (min-width: 1400px) {
            .whatsapp-btn {
                width: 110px;
                height: 110px;
                bottom: 30px;
                right: 30px;
            }
        }
    </style>
</head>

<body>

    <a href="https://wa.me/919826000000" class="whatsapp-btn">
        <div class="inner-ring"></div>
        <div class="whatsapp-icon">
            <!-- WhatsApp SVG -->
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill="none" d="M0 0h24v24H0z" />
                <path fill-rule="nonzero"
                    d="M2.004 22l1.352-4.968A9.954 9.954 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 
        10-10 10a9.954 9.954 0 0 1-5.03-1.355L2.004 22zM8.391 7.308a.961.961 0 0 0-.371.1 
        1.293 1.293 0 0 0-.294.228c-.12.113-.188.211-.261.306A2.729 2.729 0 0 0 6.9 9.62c.002.49.13.967.33 
        1.413.409.902 1.082 1.857 1.971 2.742.214.213.423.427.648.626a9.448 9.448 0 0 0 3.84 2.046l.569.087c.185.01.37-.004.556-.013a1.99 
        1.99 0 0 0 .833-.231c.166-.088.244-.132.383-.22 0 0 .043-.028.125-.09.135-.1.218-.171.33-.288.083-.086.155-.187.21-.302.078-.163.156-.474.188-.733.024-.198.017-.306.014-.373-.004-.107-.093-.218-.19-.265l-.582-.261s-.87-.379-1.401-.621a.498.498 0 0 0-.177-.041.482.482 0 0 0-.378.127v-.002c-.005 0-.072.057-.795.933a.35.35 0 0 1-.368.13 1.416 1.416 0 0 1-.191-.066c-.124-.052-.167-.072-.252-.109l-.005-.002a6.01 6.01 0 0 1-1.57-1c-.126-.11-.243-.23-.363-.346a6.296 6.296 0 0 1-1.02-1.268l-.059-.095a.923.923 0 0 1-.102-.205c-.038-.147.061-.265.061-.265s.243-.266.356-.41a4.38 4.38 0 0 0 .263-.373c.118-.19.155-.385.093-.536-.28-.684-.57-1.365-.868-2.041-.059-.134-.234-.23-.393-.249-.054-.006-.108-.012-.162-.016a3.385 3.385 0 0 0-.403.004z" />
            </svg>
        </div>
    </a>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            gsap.registerPlugin(ScrollTrigger);

            // Simple fade + scale on scroll
            gsap.from('.whatsapp-btn', {
                opacity: 0,
                scale: 0.8,
                duration: 0.8,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: '.whatsapp-btn',
                    start: 'top 85%',
                    toggleActions: 'play none none reverse'
                }
            });

            const btn = document.querySelector('.whatsapp-btn');
            const ring = document.querySelector('.inner-ring');

            // Hover animation
            btn.addEventListener('mouseenter', () => {
                gsap.to(btn, {
                    scale: 1.08,
                    boxShadow: '0 8px 20px rgba(37, 211, 102, 0.5)', // WhatsApp green shadow
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
                    boxShadow: '0 4px 10px rgba(0,0,0,0.2)', // reset shadow
                    duration: 0.4,
                    ease: "power2.inOut"
                });
                gsap.to(ring, {
                    scale: 1,
                    duration: 0.4,
                    ease: "power2.inOut"
                });
            });


            btn.addEventListener('mouseleave', () => {
                gsap.to(btn, { scale: 1, boxShadow: '0 0px 0px rgba(0,0,0,0)', duration: 0.4, ease: "power2.out" });
                gsap.to(ring, { scale: 1, duration: 0.4, ease: "power2.out" });
            });

            // Gentle idle motion
            gsap.to(btn, { y: -4, duration: 2, repeat: -1, yoyo: true, ease: "sine.inOut" });
        });
    </script>
</body>

</html>