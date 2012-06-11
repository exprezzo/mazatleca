

        <div class="pages">
 

        
              
<!--  /////////////////////////////////////  PAGE 1 /////////////////////////////////////////// -->
		<?php 
			foreach($this->paginas as $pagina){
		?>
				<div class="page" id="page<?php echo $pagina['id']; ?>">					
					<div class="bg_content">
						<div class="content">
							<?php $this->renderSeccion('pagina'.$pagina['id']); ?>
						</div>
					</div>
				</div>
		<?php
			}			
		?>          
 
<!--  /////////////////////////////////////  The End  /////////////////////////////////////////// -->
      