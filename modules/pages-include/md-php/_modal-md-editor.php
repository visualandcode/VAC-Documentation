<div class="modal fade" id="modalmdeditor" tabindex="-1" role="dialog" aria-labelledby="modalmdeditor" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modaleditoruserslabel">Markdown Editor</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="modaleditorusersbody">
				<div class="col-12" id="iframemdeditor">
					<iframe src="/md-editor/" id="iframemd" frameborder="0" style="width: 100%; height: 700px;"></iframe>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" value="false" class="reloadcontent btn btn-secondary" data-dismiss="modal">Reload Content</button>
			</div>
		</div>
	</div>
</div>


<script>

(function () {


	$(document).ready(function () {

		console.log(window.docsifyobj);

		$(document).on('click' , ".editdocument" , function () {
			var filename = $(this).attr("value");
			$("#iframemd").attr("src" , filename);
			$("#modalmdeditor").modal();

			var replaceModules = filename.replace("/md-editor/?modules" , "");
			
			$.get( replaceModules , function (data) {
				//window.DocsifyCompiler(data);
			});

		});

		$(".reloadcontent").click(function () {
			window.location.reload();
		});
	});
})();


</script>




