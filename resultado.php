<?php 

$nome = $_GET['nome'];
$funcao = $_GET['funcao'];
$email= $_GET['email'];
$telefone= $_GET['telefone'];



?>

<style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans');
</style>
 <table width="714" height="171" border="0" style="font-family: 'Open Sans', sans-serif;; margin:7px;">
  <tbody>
    <tr>
      <td width="687" height="167" style="background-image:url(http://i.imgur.com/vDv8pWM.png);">
    			<table width="784" border="0">
			  <tbody>
				<tr>
				  <td width="456" height="106">&nbsp;</td>
				  <td width="206">
				
					<table width="200" border="0">
					  <tbody>
						<tr>
						  <td style="font-weight: 600; color: #204121; font-size: 22px;"><?php echo $nome; ?></td>
						</tr>
						<tr>
						  <td height="20" style="font-weight: 300; color:#204121;"><?php echo $funcao; ?> </td>
						</tr>
					  </tbody>
					</table>
		  
				  
				  </td>
				  <td width="200">
			    
			    
			   
			     
			     <table style="color: #204121;font-weight: 100; font-size:11px;" width="200" border="0">
				    <tbody>
				      <tr>
				        <td><img src="http://i.imgur.com/OfUFDks.png">
				        
				        
				        &nbsp; <?php echo $email; ?>

				        
				        
				        </td>
			          </tr>
				      <tr>
				        <td height="31">
			          
			          
			          
			          <table width="194" border="0" style="color: #204121;font-weight: 100; font-size:11px;">
				          <tbody>
				            <tr valign="middle">
				              <td width="13"><img src="http://i.imgur.com/edXdrux.png"></td>
				              <td width="171"> <?php echo $telefone; ?>
				              
				              <bR>
				              
				              
				              
				              </td>
			                </tr>
			              </tbody>
				          </table></td>
			          </tr>
				      <tr>
				        <td> <img src="http://i.imgur.com/keJL8l7.png" width="15" height="15">
				        
				        
				        
				        &nbsp;
				        www.igh.org.br
				        
				        
				        
				        
				        </td>
			          </tr>
			        </tbody>
			      </table>
			      
			      
			      
			      
			      </td>
				</tr>
			  </tbody>
			</table>
      	
      	
      	
      	
      	
      </td>
    </tr>
  </tbody>
</table>

