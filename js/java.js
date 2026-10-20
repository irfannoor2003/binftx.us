
// CURSOR
const cursor = document.getElementById('cursor');
const ring = document.getElementById('cursorRing');
let mx = 0, my = 0, rx = 0, ry = 0;
document.addEventListener('mousemove', e => {
    mx = e.clientX; my = e.clientY;
    cursor.style.left = mx - 6 + 'px';
    cursor.style.top = my - 6 + 'px';
});
function animRing() {
    rx += (mx - rx) * .12;
    ry += (my - ry) * .12;
    ring.style.left = rx - 20 + 'px';
    ring.style.top = ry - 20 + 'px';
    requestAnimationFrame(animRing);
}
animRing();
document.querySelectorAll('a,button,.service-card,.client-card,.port-item,.slider-control,.client-card-new').forEach(el => {
    el.addEventListener('mouseenter', () => {
        cursor.style.transform = 'scale(2.5)';
        ring.style.transform = 'scale(1.5)';
        ring.style.borderColor = 'rgba(0,255,224,.7)';
    });
    el.addEventListener('mouseleave', () => {
        cursor.style.transform = 'scale(1)';
        ring.style.transform = 'scale(1)';
        ring.style.borderColor = 'rgba(0,255,224,.4)';
    });
});

// SCROLL PROGRESS
const bar = document.getElementById('scrollBar');
const hero = document.getElementById('home');
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', () => {
    const p = window.scrollY / (document.body.scrollHeight - window.innerHeight) * 100;
    bar.style.width = p + '%';
    // NAV
    navbar.classList.toggle('scrolled', window.scrollY >= hero.offsetHeight);
    navbar.classList.toggle('logo-hidden', window.scrollY > 60 && window.scrollY < hero.offsetHeight);
});

// REVEAL ON SCROLL
const revEls = document.querySelectorAll('.reveal');
const obs = new IntersectionObserver(entries => {
    entries.forEach(e => {
        if (e.isIntersecting) {
            e.target.classList.add('visible');
            // trigger capability bars
            if (e.target.classList.contains('capabilities') || e.target.closest('.capabilities')) {
                document.querySelectorAll('.cap-fill').forEach(f => {
                    f.style.width = f.dataset.width + '%';
                });
            }
        }
    });
}, { threshold: .1, rootMargin: '0px 0px -50px 0px' });
revEls.forEach(el => obs.observe(el));

// trigger caps when parent visible
const capSection = document.querySelector('.capabilities');

if (capSection) {
    const capObs = new IntersectionObserver(entries => {
        entries.forEach(entry => {

            if (entry.isIntersecting) {
                // Animate fill
                document.querySelectorAll('.cap-fill').forEach(f => {
                    f.style.width = f.dataset.width + '%';
                });
            } else {
                // Reset when leaving
                document.querySelectorAll('.cap-fill').forEach(f => {
                    f.style.width = '0%';
                });
            }

        });
    }, { threshold: 0.4 });

    capObs.observe(capSection);
}

// staggered reveal delays
document.querySelectorAll('.services-grid .service-card').forEach((c, i) => {
    c.style.transitionDelay = i * .08 + 's';
});
document.querySelectorAll('.portfolio-grid .port-item').forEach((c, i) => {
    c.style.transitionDelay = i * .07 + 's';
});

// PORTFOLIO glow follow
document.querySelectorAll('.port-item').forEach(item => {
    item.addEventListener('mousemove', e => {
        const r = item.getBoundingClientRect();
        const x = ((e.clientX - r.left) / r.width * 100).toFixed(1);
        const y = ((e.clientY - r.top) / r.height * 100).toFixed(1);
        item.querySelector('.port-glow').style.setProperty('--mx', x + '%');
        item.querySelector('.port-glow').style.setProperty('--my', y + '%');
    });
});

// PORTFOLIO FILTER
const filters = document.querySelectorAll('.port-filter');
const portItems = document.querySelectorAll('.portfolio-grid .port-item');
filters.forEach(btn => {
    btn.addEventListener('click', () => {
        filters.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const f = btn.dataset.filter;
        portItems.forEach(item => {
            const show = f === 'all' || item.dataset.type === f;
            item.style.transition = 'opacity .4s,transform .4s';
            item.style.opacity = show ? '1' : '0.15';
            item.style.pointerEvents = show ? 'all' : 'none';
        });
    });
});

// LIGHTBOX
const lb = document.getElementById('lightbox');
const lbInner = document.getElementById('lbInner');
const lbCaption = document.getElementById('lbCaption');
const lbDots = document.getElementById('lbDots');

// CLIENTS SLIDER LOGIC
window.addEventListener('load', () => {
    const clientsTrack = document.getElementById('clientsTrack');
    const clientsPrev = document.getElementById('clientsPrev');
    const clientsNext = document.getElementById('clientsNext');
    let clientIndex = 0;

    function updateSlider() {
        const cards = document.querySelectorAll('.client-card-new');
        if (!clientsTrack || cards.length === 0) return;
        
        const card = cards[0];
        const cardWidth = card.offsetWidth + 30; // card width + gap
        
        // Calculate visible cards based on CSS media queries
        let visibleCards = 3;
        if (window.innerWidth <= 768) visibleCards = 1;
        else if (window.innerWidth <= 1024) visibleCards = 2;
        
        const maxIndex = Math.max(0, cards.length - visibleCards);
        
        // Clamp index
        if (clientIndex > maxIndex) clientIndex = maxIndex;
        if (clientIndex < 0) clientIndex = 0;

        clientsTrack.style.transform = `translateX(${-clientIndex * cardWidth}px)`;
        
        // Update button states
        if (clientsPrev) {
            clientsPrev.style.opacity = clientIndex === 0 ? '0.3' : '1';
            clientsPrev.style.pointerEvents = clientIndex === 0 ? 'none' : 'all';
        }
        
        if (clientsNext) {
            clientsNext.style.opacity = clientIndex >= maxIndex ? '0.3' : '1';
            clientsNext.style.pointerEvents = clientIndex >= maxIndex ? 'none' : 'all';
        }
    }

    if (clientsTrack && clientsPrev && clientsNext) {
        clientsPrev.addEventListener('click', () => {
            if (clientIndex > 0) {
                clientIndex--;
                updateSlider();
            }
        });

        clientsNext.addEventListener('click', () => {
            const cards = document.querySelectorAll('.client-card-new');
            let visibleCards = 3;
            if (window.innerWidth <= 768) visibleCards = 1;
            else if (window.innerWidth <= 1024) visibleCards = 2;
            
            const maxIndex = Math.max(0, cards.length - visibleCards);
            if (clientIndex < maxIndex) {
                clientIndex++;
                updateSlider();
            }
        });

        window.addEventListener('resize', updateSlider);
        // Initial delay to ensure styles are rendered
        setTimeout(updateSlider, 100);
    }
});

const media = [
    { type: 'video', src: 'videos/1.mp4', label: 'VFX & CGI 2024', title: 'Cinematic Showreel' },
    { type: 'video', src: 'videos/2.mp4', label: '3D Animation', title: 'Character Pipeline' },
    { type: 'image', src: 'images/1.jpg', label: 'Content Production', title: 'Brand Campaign' },
    { type: 'video', src: 'videos/3.mp4', label: 'Motion Graphics', title: 'Broadcast Package' },
    { type: 'video', src: 'videos/4.mp4', label: 'VR Experience', title: '360 Environment' },
    { type: 'image', src: 'images/2.jpg', label: 'Photography', title: 'Visual Editorial' },
];

let currentIndex = 0;

// build dots
media.forEach((_, i) => {
    const d = document.createElement('div');
    d.className = 'lightbox-dot' + (i === 0 ? ' active' : '');
    d.addEventListener('click', () => openLb(i));
    lbDots.appendChild(d);
});

function openLb(idx) {
    currentIndex = idx;
    const m = media[idx];
    lbInner.innerHTML = '';
    if (m.type === 'video') {
        const v = document.createElement('video');
        v.src = m.src; v.controls = true; v.autoplay = true;
        v.className = 'lightbox-media';
        v.style.maxHeight = '82vh';
        lbInner.appendChild(v);
    } else {
        const img = document.createElement('img');
        img.src = m.src; img.className = 'lightbox-media';
        lbInner.appendChild(img);
    }
    lbCaption.innerHTML = `<span>${m.label}</span> · ${m.title}`;
    document.querySelectorAll('.lightbox-dot').forEach((d, i) => {
        d.classList.toggle('active', i === idx);
    });
    lb.classList.add('open');
    document.body.style.overflow = 'hidden';
}

function closeLb() {
    lb.classList.remove('open');
    document.body.style.overflow = '';
    // stop any playing video
    const v = lbInner.querySelector('video');
    if (v) { v.pause(); v.src = ''; }
    lbInner.innerHTML = '';
}

document.getElementById('lbClose').addEventListener('click', closeLb);
document.getElementById('lbPrev').addEventListener('click', () => openLb((currentIndex - 1 + media.length) % media.length));
document.getElementById('lbNext').addEventListener('click', () => openLb((currentIndex + 1) % media.length));
lb.addEventListener('click', e => { if (e.target === lb) closeLb(); });
document.addEventListener('keydown', e => {
    if (!lb.classList.contains('open')) return;
    if (e.key === 'Escape') closeLb();
    if (e.key === 'ArrowLeft') openLb((currentIndex - 1 + media.length) % media.length);
    if (e.key === 'ArrowRight') openLb((currentIndex + 1) % media.length);
});

// click on port items opens lightbox
document.querySelectorAll('.portfolio-grid .port-item').forEach(item => {
    item.addEventListener('click', () => openLb(parseInt(item.dataset.index)));
});

// JOIN FORM MODAL
const joinFormModal = document.getElementById('joinFormModal');
const joinFormOpenBtn = document.getElementById('formopenbtn');
const joinFormCloseBtns = document.querySelectorAll('[data-close-join-form]');

function openJoinForm() {
    if (!joinFormModal) return;
    joinFormModal.classList.add('open');
    joinFormModal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';

    const firstField = joinFormModal.querySelector('input, select, textarea');
    if (firstField) {
        setTimeout(() => firstField.focus(), 100);
    }
}

function closeJoinForm() {
    if (!joinFormModal) return;
    joinFormModal.classList.remove('open');
    joinFormModal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
    if (joinFormOpenBtn) joinFormOpenBtn.focus();
}

if (joinFormOpenBtn) {
    joinFormOpenBtn.addEventListener('click', e => {
        e.preventDefault();
        openJoinForm();
    });
}

joinFormCloseBtns.forEach(btn => {
    btn.addEventListener('click', closeJoinForm);
});

document.addEventListener('keydown', e => {
    if (e.key === 'Escape' && joinFormModal && joinFormModal.classList.contains('open')) {
        closeJoinForm();
    }
});

// SUBMIT
function handleSubmit(btn) {
    const orig = btn.textContent;
    btn.textContent = 'Sending...';
    btn.style.opacity = '.7';
    btn.disabled = true;
    setTimeout(() => {
        btn.textContent = ' Application Sent!';
        btn.style.background = 'linear-gradient(135deg,#00ff88,#00cc70)';
        setTimeout(() => {
            btn.textContent = orig;
            btn.style.background = '';
            btn.style.opacity = '1';
            btn.disabled = false;
        }, 3000);
    }, 1500);
}




// SMOOTH NAV
document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
        if (a.id === 'formopenbtn') return;
        const t = document.querySelector(a.getAttribute('href'));
        if (t) { e.preventDefault(); t.scrollIntoView({ behavior: 'smooth' }); }
    });
});



const orb = document.querySelector('.contact-orb');

document.addEventListener('mousemove', (e) => {
    const x = (e.clientX / window.innerWidth - 0.5) * 25;
    const y = (e.clientY / window.innerHeight - 0.5) * 25;

    orb.style.transform = `
        translate(-50%, -50%)
        rotateX(${-y}deg)
        rotateY(${x}deg)
    `;
});



window.addEventListener("load", () => {
    const hamburger = document.getElementById("hamburger");
    const navLinks = document.querySelector(".nav-links");

    if (hamburger && navLinks) {
        hamburger.addEventListener("click", () => {
            hamburger.classList.toggle("active");
            navLinks.classList.toggle("active");
        });

        document.querySelectorAll(".nav-links a").forEach(link => {
            link.addEventListener("click", () => {
                hamburger.classList.remove("active");
                navLinks.classList.remove("active");
            });
        });
    }
});


function closeAlert(el) {
    const alert = el.closest(".alertBox");
    if (!alert) return;

    alert.style.opacity = "0";
    alert.style.transform = "translateY(-10px)";

    setTimeout(() => {
        alert.remove();
    }, 300);
}

// auto close
window.addEventListener("load", () => {
    const alert = document.querySelector(".alertBox");
    if (alert) {
        setTimeout(() => {
            alert.style.opacity = "0";
            alert.style.transform = "translateY(-10px)";
            setTimeout(() => alert.remove(), 300);
        }, 3000);
    }
});

// CLIENT CARD GLOW EFFECT
document.querySelectorAll('.client-card-new').forEach(item => {
    item.addEventListener('mousemove', e => {
        const r = item.getBoundingClientRect();
        const x = ((e.clientX - r.left) / r.width * 100).toFixed(1);
        const y = ((e.clientY - r.top) / r.height * 100).toFixed(1);
        const glow = item.querySelector('.card-glow');
        if (glow) {
            glow.style.setProperty('--mx', x + '%');
            glow.style.setProperty('--my', y + '%');
        }
    });
});


// CINEMATIC GATE
document.addEventListener("DOMContentLoaded", () => {
    const gateBtn = document.getElementById("gateBtn");
    const gate = document.getElementById("cinematic-gate");
    if (gateBtn && gate) {
        document.body.style.overflow = "hidden"; // lock scroll while gate is open
        gateBtn.addEventListener("click", () => {
            gate.classList.add("gate-open");
            document.body.style.overflow = ""; // restore scroll
        });

        // Auto click the button after 10 seconds
        setTimeout(() => {
            if (!gate.classList.contains("gate-open")) {
                gateBtn.click();
            }
        }, 3000);
    }
});
