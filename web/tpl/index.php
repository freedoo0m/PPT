<?php 
	include_once('head.php');
?>
	
<!--ţ��-->
                 <div class="margin">
            	  <!--��һ����ͼ-->
                    <div class="content1">
                       
                        <div class="content1_menu">
                            <div class="news fontsize16 fontweightbload"> ���Ŷ�̬</div>
                            <div class="more"><img src="../images/mode_03.jpg" /></div>
                        </div>
                        
                       
                        <div class="content_left">
                            <dl>
                                <dt><img src="../images/first_03.jpg" alt="alt" /></dt>
                                <dd>
                                <div style='height:5px; '></div>
                                <h2>PPT��̬</h2>
                                PPT��һ����ʾ�ĸ�ͼ�γ�����Power Point��ơ�
                                Power Point��΢��˾��Ʒ��Office ���ϵ����Ҫ
                                ���֮һ(����Excel,Word��)�����⻹������
                                ���������ü��֮һ��Ũ�ȶ�����λ��Ƶȡ�
                                PPT��һ����ʾ�ĸ�ͼ�γ�����Power Point��ơ�
                                Power Point��΢��˾��Ʒ��Office ���ϵ����Ҫ
                                ���֮һ(����Excel,Word��)�����⻹������
                                ���������ü��֮һ��Ũ�ȶ�����λ��Ƶȡ�
                                
                                </dd>
                            </dl>
                        </div>
                    </div><!--��һ����ͼ  end-->
                   
                    <!--��һ����ͼ-->
                    <div class="content2">
                        <div class="content2_top">
                            <div class="news fontsize16 fontweightbload">����չʾ</div>
                            <div class="more"><img src="../images/mode_03.jpg" /></div>
                        </div>
                        <div>
                        	<div class="fanli">
                                
                                <?php 
                                  $result = $db->select_db_sql("SELECT pid,subject  FROM ppt_forum_post where fid=41 limit 0,6");
                                  while ( $row = mysql_fetch_assoc($result) ) {
                                      ?>
                                    <div class="li1">
                                      <img src="../images/xiaobiaoti2_03.jpg"><span>ppt�����н���<?php echo $row['subject']?></span>
                                  </div> 
                                  <?php
                                  }
                                ?> 
                        </div>
                           
                    </div><!--��һ����ͼ end -->
                </div>
                <!--�����н���-->
                
                
                     <div class="moban">
                     <div class="tianchong" ></div><!--���  end-->
                     <div class="moban1">
                         <div class="moban1_top">
                              <div class="news">��ҳ�ز�</div>
                              <div class="more"><img src="../images/mode_03.jpg" /></div>
                         </div><!--moban1_top end-->
                         <div class="moban1_bottom">
                            <?php 
                                $result = $db->select_db_sql("SELECT pid,subject,dateline  FROM ppt_forum_post where fid=38 limit 0,6");
                                while ( $row = mysql_fetch_assoc($result) ) {
                                    ?>
                                  <div class="li1 w291">
                                    <img src="../images/sanjiao_03.jpg" /><span><?php echo $row['subject']."&nbsp;&nbsp;".date('Y-m-d',$row['dateline']) ?></span>
                                 </div>
                                <?php
                                }
                              ?>
                         </div><!--moban1_bottom end-->
                     </div><!--moban1 end--> 
                     
                     
                    <div class="moban2">
                          <div class="moban1_top">
                                <div class="news1 fontsize16 fontweightbload">ppt���ֽ̳�</div>
                                <div class="more"><img src="../images/mode_03.jpg" /></div>
                          </div><!--moban1_top end-->
                          <div class="moban1_bottom">
                                  <div class="line1">
                                       <div class="sanjiao"><img src="../images/sanjiao_03.jpg" /></div>
                                       <div class="text">ppt�����н�����ӭ����pptģ��</div>
                                       <div class="time">2012-11-22</div>
                                  </div>
                                  <div class="line1">
                                      <div class="sanjiao"><img src="../images/sanjiao_03.jpg" /></div>
                                      <div class="text">ppt�����н�����ӭ����pptģ��</div>
                                      <div class="time">2012-11-22</div>
                                  </div>
                                 <div class="line1">
                                      <div class="sanjiao"><img src="../images/sanjiao_03.jpg" /></div>
                                      <div class="text">ppt�����н�����ӭ����pptģ��</div>
                                      <div class="time">2012-11-22</div>
                                 </div>
                                 <div class="line1">
                                      <div class="sanjiao"><img src="../images/sanjiao_03.jpg" /></div>
                                      <div class="text">ppt�����н�����ӭ����pptģ��</div>
                                      <div class="time">2012-11-22</div>
                                 </div>
                                 <div class="line1">
                                      <div class="sanjiao"><img src="../images/sanjiao_03.jpg" /></div>
                                      <div class="text">ppt�����н�����ӭ����pptģ��</div>
                                      <div class="time">2012-11-22</div>
                                 </div>
                           </div>
                     </div><!--moban2 end-->
                     
                     
                     <div class="moban3">
                          <div class="moban1_top">
                               <div class="news1 fontsize16 fontweightbload">ppt��Ƶ�̳�</div>
                               <div class="more"><img src="../images/mode_03.jpg" /></div>
                          </div><!--moban1_top end-->
                          <div class="moban1_bottom">
                               <div class="moban1_bottom">
                                  <div class="line1">
                                       <div class="sanjiao"><img src="../images/sanjiao_03.jpg" /></div>
                                       <div class="text">ppt�����н�����ӭ����pptģ��</div>
                                       <div class="time">2012-11-22</div>
                                  </div>
                                  <div class="line1">
                                      <div class="sanjiao"><img src="../images/sanjiao_03.jpg" /></div>
                                      <div class="text">ppt�����н�����ӭ����pptģ��</div>
                                      <div class="time">2012-11-22</div>
                                  </div>
                                 <div class="line1">
                                      <div class="sanjiao"><img src="../images/sanjiao_03.jpg" /></div>
                                      <div class="text">ppt�����н�����ӭ����pptģ��</div>
                                      <div class="time">2012-11-22</div>
                                 </div>
                                 <div class="line1">
                                      <div class="sanjiao"><img src="../images/sanjiao_03.jpg" /></div>
                                      <div class="text">ppt�����н�����ӭ����pptģ��</div>
                                      <div class="time">2012-11-22</div>
                                 </div>
                                 <div class="line1">
                                      <div class="sanjiao"><img src="../images/sanjiao_03.jpg" /></div>
                                      <div class="text">ppt�����н�����ӭ����pptģ��</div>
                                      <div class="time">2012-11-22</div>
                                 </div>
                           </div>
                          </div>  
                      </div><!--moban3 end-->
                     
               </div>
               <!--ģ���н���-->
                 
                <div class="fanlizhanshi">
                     <div class="tianchong" ></div><!--���  end-->
                     <div class="moban1_top">
                          <div class="news fontsize16 fontweightbload">����չʾ</div>
                           <div class="maohao">
                               <div class="doudou"><img src="../images/ou.png" /></div> 
                               <div class="doudou1"><img src="../images/ou.png" /></div>
                               <div class="doudou1"><img src="../images/ou.png" /></div>
                               <div class="doudou1"><img src="../images/ou.png" /></div>
                               <div class="doudou1"><img src="../images/ou.png" /></div>
                               <div class="doudou1"><img src="../images/ou.png" /></div>
                               <div class="doudou1"><img src="../images/ou.png" /></div>
                               <div class="doudou1"><img src="../images/ou.png" /></div>
                               <div class="nav2"><img src="../images/toumingjiantou.png" /></div>
                               <div class="nav2"><img src="../images/touming2.png" /></div> 
                          </div>
                          <div class="more"><img src="../images/mode_03.jpg" /></div>
                     </div>
                     <div class="fanli_row fanli_row_underlinee">
                          <div class="pic1">
                               <dl>
                                   <dt><img src="../images/flzs_03.jpg" alt="pptģ��" title="pptģ��" /></dt>
                                   <dd>����pptģ��</dd> 
                               </dl>
                          </div>
                          <div class="pic1">
                               <dl>
                                  <dt><img src="../images/flzs_03.jpg" alt="pptģ��" title="pptģ��" /></dt>
                                  <dd>����pptģ��</dd>
                             </dl>
                          </div>
                          <div class="pic1">
                               <dl>
                                   <dt><img src="../images/flzs_03.jpg" alt="pptģ��" title="pptģ��" /></dt>
                                   <dd>����pptģ��</dd>
                               </dl>
                          </div>
                          <div class="pic1">
                               <dl>
                                   <dt><img src="../images/flzs_03.jpg" alt="pptģ��" title="pptģ��" /></dt>
                                   <dd>����pptģ��</dd>
                               </dl>
                          </div>
                          <div class="pic1">
                               <dl>
                                   <dt><img src="../images/flzs_03.jpg" alt="pptģ��" title="pptģ��" /></dt>
                                   <dd>����pptģ��</dd>
                               </dl>
                          </div>
                     </div> <!--fanli_head end--> 
                     
                     <div class="fanli_row fanli_row_underlinee">
                          <div class="pic1">
                               <dl>
                                   <dt><img src="../images/flzs_03.jpg" alt="pptģ��" title="pptģ��" /></dt>
                                   <dd>����pptģ��</dd> 
                               </dl>
                          </div>
                          <div class="pic1">
                               <dl>
                                  <dt><img src="../images/flzs_03.jpg" alt="pptģ��" title="pptģ��" /></dt>
                                  <dd>����pptģ��</dd>
                             </dl>
                          </div>
                          <div class="pic1">
                               <dl>
                                   <dt><img src="../images/flzs_03.jpg" alt="pptģ��" title="pptģ��" /></dt>
                                   <dd>����pptģ��</dd>
                               </dl>
                          </div>
                          <div class="pic1">
                               <dl>
                                   <dt><img src="../images/flzs_03.jpg" alt="pptģ��" title="pptģ��" /></dt>
                                   <dd>����pptģ��</dd>
                               </dl>
                          </div>
                          <div class="pic1">
                               <dl>
                                   <dt><img src="../images/flzs_03.jpg" alt="pptģ��" title="pptģ��" /></dt>
                                   <dd>����pptģ��</dd>
                               </dl>
                          </div>
                     </div><!--fanli_middle end-->
                     
                     <div class="fanli_footer">
                          <div class="pic1">
                               <dl>
                                   <dt><img src="../images/flzs_03.jpg" alt="pptģ��" title="pptģ��" /></dt>
                                   <dd>����pptģ��</dd> 
                               </dl>
                          </div>
                          <div class="pic1">
                               <dl>
                                  <dt><img src="../images/flzs_03.jpg" alt="pptģ��" title="pptģ��" /></dt>
                                  <dd>����pptģ��</dd>
                             </dl>
                          </div>
                          <div class="pic1">
                               <dl>
                                   <dt><img src="../images/flzs_03.jpg" alt="pptģ��" title="pptģ��" /></dt>
                                   <dd>����pptģ��</dd>
                               </dl>
                          </div>
                          <div class="pic1">
                               <dl>
                                   <dt><img src="../images/flzs_03.jpg" alt="pptģ��" title="pptģ��" /></dt>
                                   <dd>����pptģ��</dd>
                               </dl>
                          </div>
                          <div class="pic1">
                               <dl>
                                   <dt><img src="../images/flzs_03.jpg" alt="pptģ��" title="pptģ��" /></dt>
                                   <dd><a href="details.php?id=1">����pptģ��</a></dd>
                               </dl>
                          </div>
                     </div>
                </div>
                <!--ģ���б�չʾ�н���-->
                
                
			<!--ţ��  end-->


	
<?php 
	include_once("foot.php");
?>