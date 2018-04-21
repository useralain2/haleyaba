                </div>
			</div>
			<!-- end:: Body -->
			
			<?php require '_partials/_footer-default.php'; ?>

		</div>
		<!-- end:: Page -->

		<?php require '_partials/_layout-quick-sidebar.php'; ?>
		<?php require '_partials/_layout-scroll-top.php'; ?>
		<?php require '_partials/_layout-tooltips.php'; ?>

		<!--begin::Metronic Base Scripts -->
		<script src="assets/metronic/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="assets/metronic/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Metronic Base Scripts -->

        <!--begin::Custom Scripts -->
		<script src="assets/js/main.js" type="text/javascript"></script>
        <!--end::Custom Scripts -->

		<!-- begin::Page Resources -->
		<?php
            if( file_exists( '_page-resources/' . $curr_page_name ) ) {
                require '_page-resources/' . $curr_page_name;
            }
        ?>
		<!-- end::Page Resources -->

	</body>
	<!-- end::Body -->
</html>