function onEntry(entry) {
    entry.forEach(change => {
      if (change.isIntersecting) {
        if (change.target.classList.contains("element-show")) return;

        change.target.classList.add('element-show');

        if (change.target.classList.contains("anim_pl_nadp")) {
            gsap.from(".anim_pl_nadp", { opacity: 0, duration: 3, delay:1})
            gsap.from(".anim_pl_deviz", { opacity: 0, y:4, duration: 0.6, delay:1.8})
        }
        
        if (change.target.classList.contains("anim_preim")) {
            gsap.to(change.target, { opacity: 1, y:0, duration: 1})
        }

        if (change.target.classList.contains("anim_blk_1")) {
            gsap.to(change.target, { opacity: 1, x:0, duration: 2})
        }

        if (change.target.classList.contains("anim_blk_1_head")) {
            gsap.to(change.target, { opacity: 1, y:0, duration: 1})
        }

        if (change.target.classList.contains("anim_blk_1_head2")) {
            gsap.to(change.target, { opacity: 1, y:0, duration: 1})
        }

        if (change.target.classList.contains("anim_blk_1_img")) {
            gsap.to(change.target, { opacity: 1, duration: 1})
        }

        if (change.target.classList.contains("anim_blk_1_map")) {
            gsap.to(change.target, { opacity: 1, x:0, duration: 1})
        }
      }
    });
  }
  let options = { threshold: [0.5] };
  let observer = new IntersectionObserver(onEntry, options);
  let elements = document.querySelectorAll('.element-animation');
  for (let elm of elements) {
    observer.observe(elm);
  }