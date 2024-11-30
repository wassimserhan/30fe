<?php
/**
 * The Footer template
 *
 * Displays all of the footer-content section to end tag of html.
 *
 * @package 30FE TEMPLATE
 */

?>





<footer class="footer black-bg">

    <div class="ticker-wrap">
        <div class="ticker">
            <span class="scroll-collection-1">
                <span class="scroll">We are Engineers &ndash; Scientists &ndash; Experts &ndash; Truth Seekers &ndash;
                    Detectives &ndash; Problem Solvers &ndash; Reporters &ndash;</span>
                <span class="scroll">We are Engineers &ndash; Scientists &ndash; Experts &ndash; Truth Seekers &ndash;
                    Detectives &ndash; Problem Solvers &ndash; Reporters &ndash;</span>
                <span class="scroll">We are Engineers &ndash; Scientists &ndash; Experts &ndash; Truth Seekers &ndash;
                    Detectives &ndash; Problem Solvers &ndash; Reporters &ndash;</span>
                <span class="scroll">We are Engineers &ndash; Scientists &ndash; Experts &ndash; Truth Seekers &ndash;
                    Detectives &ndash; Problem Solvers &ndash; Reporters &ndash;</span>
            </span>
            <span class="scroll-collection-2">
                <span class="scroll">We are Engineers &ndash; Scientists &ndash; Experts &ndash; Truth Seekers &ndash;
                    Detectives &ndash; Problem Solvers &ndash; Reporters &ndash;</span>
                <span class="scroll">We are Engineers &ndash; Scientists &ndash; Experts &ndash; Truth Seekers &ndash;
                    Detectives &ndash; Problem Solvers &ndash; Reporters &ndash;</span>
                <span class="scroll">We are Engineers &ndash; Scientists &ndash; Experts &ndash; Truth Seekers &ndash;
                    Detectives &ndash; Problem Solvers &ndash; Reporters &ndash;</span>
                <span class="scroll">We are Engineers &ndash; Scientists &ndash; Experts &ndash; Truth Seekers &ndash;
                    Detectives &ndash; Problem Solvers &ndash; Reporters &ndash;</span>
            </span>
        </div>
        <section class="max-width footer__padding">
            <div class="footer__legal">
                <p class="footer__copyright">
                    &copy; <span id="copyright"></span> 30 Forensic Engineering.&nbsp; All Rights Reserved.
                </p>
            </div>
        </section>
</footer>



<?php wp_footer(); ?>

<script>
// Dynamically update the copyright year
document.addEventListener('DOMContentLoaded', function() {
    const copyrightSpan = document.getElementById('copyright');
    if (copyrightSpan) {
        copyrightSpan.textContent = new Date().getFullYear();
    }
});
</script>




<script async src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.2.0/lazysizes.min.js" rel="preload"></script>



</body>

</html>