		</div>
		<script src="<?php base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
		<script src="<?php base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Core plugin JavaScript-->
		<script src="<?php base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

		<!-- Custom scripts for all pages-->
		<script src="<?php base_url('assets/') ?>js/sb-admin-2.min.js"></script>

		<!-- Page level plugins -->
		<script src="<?php base_url('assets/') ?>vendor/chart.js/Chart.min.js"></script>

		<!-- Page level custom scripts -->
		<script src="<?php base_url('assets/') ?>js/demo/chart-area-demo.js"></script>
		<script src="<?php base_url('assets/') ?>js/demo/chart-pie-demo.js"></script>



		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

		<!-- Added script -->
		<script src="<?php base_url('assets/') ?>js/jadwal.js"></script>



		<script src="<?php base_url('assets/') ?>script.js"></script>
		<script>
		    ClassicEditor
		        .create(document.querySelector('#editor'))

		        //  		.create( document.querySelector( '#editor' ), {
		        //  			plugins: [ WordCount, ... ],
		        //  			wordCount: {
		        //      			onUpdate: stats => {
		        //          			// Prints the current content statistics.
		        //          			console.log( `Characters: ${ stats.characters }\nWords: ${ stats.words }` );
		        //      			}
		        //  			}
		        // } )

		        .then(editor => {
		            const wordCountPlugin = editor.plugins.get('WordCount');
		            const wordCountWrapper = document.getElementById('word-count');

		            wordCountWrapper.appendChild(wordCountPlugin.wordCountContainer);
		        })

		        .catch(error => {
		            console.error(error);
		        });
		</script>
		<script>
		    $('.custom-file-input').on('change', function() {
		        let fileName = $(this).val().split('\\').pop();
		        $(this).next('.custom-file-label').addClass("selected").html(fileName);
		    });
		</script>
		<script>
		    const pwd = document.getElementById('current_password');
		    const pwd2 = document.getElementById('new_password1');
		    const pwd3 = document.getElementById('new_password2');
		    const eye = document.getElementById('eye');
		    const eye2 = document.getElementById('eye2');
		    const eye3 = document.getElementById('eye3');

		    eye.addEventListener('click', togglePass);
		    eye2.addEventListener('click', togglePass1);
		    eye3.addEventListener('click', togglePass2);

		    function togglePass() {
		        eye.classList.toggle('active');
		        (pwd.type == 'password') ? pwd.type = 'text': pwd.type = 'password';
		    }

		    function togglePass1() {
		        eye2.classList.toggle('active');
		        (pwd2.type == 'password') ? pwd2.type = 'text': pwd2.type = 'password';
		    }

		    function togglePass2() {
		        eye3.classList.toggle('active');
		        (pwd3.type == 'password') ? pwd3.type = 'text': pwd3.type = 'password';
		    }

		    function togglePass4() {
		        eye4.classList.toggle('active');
		        (pwd4.type == 'password') ? pwd4.type = 'text': pwd4.type = 'password';
		    }
		</script>
		<script>
		    $(document).ready(function() {
		        $('#show-post').DataTable({
		            "lengthMenu": [
		                [10, 25, 50, -1],
		                [10, 25, 50, "All"]
		            ]
		        });
		    });
		</script>
		</body>

		</html>