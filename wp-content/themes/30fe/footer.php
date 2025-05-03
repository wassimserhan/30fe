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
                <p class="footer__copyright">
                    30FE arranges for accessible feedback, accessible formats, and communication supports, on request.
                </p>
                <p class="footer__copyright">
                    <a style="color: inherit; text-decoration: underline !important"
                        href="http://30fe.com/wp-content/uploads/2024/12/30FE-Multi-year-Plan-and-Accessibility-Policies-December-2024.pdf">Accessibility</a>
                </p>
                <br>
                <p class="footer__copyright"><a style="color: #f2f1ed; text-decoration: underline !important"
                        href="https://www.studiowildwild.com/" target="_blank" rel="noopener noreferrer">
                        Design and Development by Wild Wild
                    </a></p>
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