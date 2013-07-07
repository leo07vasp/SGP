<div class="row-fluid mensagens-container">

	<pre>
		
		<?php print_r($mensagens); die; ?>
	</pre>
			
    <div class="span2">
      <ul class="msg">
<?php foreach($mensagens as $mensagem): ?>      	

	<li class="int-msg" data-msg="<?php echo $mensagem['Msg']['id']?>">
      		<span><strong>De:</strong> leonardo</span><br/>
      		<span><strong>Para:</strong> leonardo</span>
      		<h6><?php echo $mensagem['Msg']['titulo'] ?></h6>
      	</li>		


<?php endforeach; ?>
      </ul>
    </div>
    <div class="span10">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam laboriosam aut nobis ab consequuntur sit velit sapiente impedit quaerat doloremque eligendi ipsa nulla quos repudiandae ipsam quidem vitae a quis saepe cupiditate nemo modi culpa tenetur accusamus maiores voluptatibus alias asperiores at suscipit repellat autem dignissimos explicabo doloribus debitis neque necessitatibus et. Eaque excepturi molestiae repellendus ad qui ipsa nisi officia architecto adipisci saepe. A officiis eligendi voluptatem quae quidem tempora magni nesciunt distinctio totam ut natus quam veritatis reprehenderit! Laborum ea ipsam inventore sapiente cupiditate voluptates enim quod laboriosam! Inventore sint facilis quisquam tempore repellat cumque perspiciatis asperiores voluptate libero recusandae perferendis similique doloribus consequatur quasi harum ullam maxime numquam quos. Esse perferendis quasi deserunt aspernatur omnis aut inventore autem laboriosam labore cupiditate quo blanditiis voluptatum corrupti doloremque asperiores ab possimus perspiciatis reprehenderit officiis facere necessitatibus nam eveniet quibusdam? Eligendi veritatis ullam rem necessitatibus sint rerum qui facilis adipisci illo dignissimos. Autem quibusdam sunt laborum suscipit iste nisi minima dolorem deserunt sit at sapiente excepturi laboriosam quasi reprehenderit earum repellat provident ducimus explicabo quidem eos ex blanditiis nostrum distinctio! Sit veritatis libero voluptatibus officia architecto dolore debitis officiis ut eveniet odio perspiciatis error unde totam quam in quaerat corrupti.
    </div>
  </div>