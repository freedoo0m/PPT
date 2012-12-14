<?php 
	include_once('head.php');
?>
	
<!--牛娟-->
                 <div class="margin">
            	  <!--第一行左图-->
                    <div class="content1">
                       
                        <div class="content1_menu">
                            <div class="news fontsize16 fontweightbload"> 新闻动态</div>
                            <div class="more"><img src="../images/mode_03.jpg" /></div>
                        </div>
                        
                       
                        <div class="content_left">
                            <dl>
                                <dt><img src="../images/first_03.jpg" alt="alt" /></dt>
                                <dd>
                                <div style='height:5px; '></div>
                                <h2>PPT动态</h2>
                                PPT，一种演示文稿图形程序，是Power Point简称。
                                Power Point是微软公司出品的Office 软件系列重要
                                组件之一(含有Excel,Word等)。另外还有其他
                                意象：泡泡堂简称之一；浓度度量单位简称等。
                                PPT，一种演示文稿图形程序，是Power Point简称。
                                Power Point是微软公司出品的Office 软件系列重要
                                组件之一(含有Excel,Word等)。另外还有其他
                                意象：泡泡堂简称之一；浓度度量单位简称等。
                                
                                </dd>
                            </dl>
                        </div>
                    </div><!--第一行左图  end-->
                   
                    <!--第一行右图-->
                    <div class="content2">
                        <div class="content2_top">
                            <div class="news fontsize16 fontweightbload">范例展示</div>
                            <div class="more"><img src="../images/mode_03.jpg" /></div>
                        </div>
                        <div>
                        	<div class="fanli">
                                
                                <?php 
                                  $result = $db->select_db_sql("SELECT pid,subject  FROM ppt_forum_post where fid=41 limit 0,6");
                                  while ( $row = mysql_fetch_assoc($result) ) {
                                      ?>
                                    <div class="li1">
                                      <img src="../images/xiaobiaoti2_03.jpg"><span>ppt下载有奖，<?php echo $row['subject']?></span>
                                  </div> 
                                  <?php
                                  }
                                ?> 
                        </div>
                           
                    </div><!--第一行右图 end -->
                </div>
                <!--新闻行结束-->
                
                
                     <div class="moban">
                     <div class="tianchong" ></div><!--填充  end-->
                     <div class="moban1">
                         <div class="moban1_top">
                              <div class="news">网页素材</div>
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
                                <div class="news1 fontsize16 fontweightbload">ppt文字教程</div>
                                <div class="more"><img src="../images/mode_03.jpg" /></div>
                          </div><!--moban1_top end-->
                          <div class="moban1_bottom">
                                  <div class="line1">
                                       <div class="sanjiao"><img src="../images/sanjiao_03.jpg" /></div>
                                       <div class="text">ppt下载有奖，欢迎下载ppt模板</div>
                                       <div class="time">2012-11-22</div>
                                  </div>
                                  <div class="line1">
                                      <div class="sanjiao"><img src="../images/sanjiao_03.jpg" /></div>
                                      <div class="text">ppt下载有奖，欢迎下载ppt模板</div>
                                      <div class="time">2012-11-22</div>
                                  </div>
                                 <div class="line1">
                                      <div class="sanjiao"><img src="../images/sanjiao_03.jpg" /></div>
                                      <div class="text">ppt下载有奖，欢迎下载ppt模板</div>
                                      <div class="time">2012-11-22</div>
                                 </div>
                                 <div class="line1">
                                      <div class="sanjiao"><img src="../images/sanjiao_03.jpg" /></div>
                                      <div class="text">ppt下载有奖，欢迎下载ppt模板</div>
                                      <div class="time">2012-11-22</div>
                                 </div>
                                 <div class="line1">
                                      <div class="sanjiao"><img src="../images/sanjiao_03.jpg" /></div>
                                      <div class="text">ppt下载有奖，欢迎下载ppt模板</div>
                                      <div class="time">2012-11-22</div>
                                 </div>
                           </div>
                     </div><!--moban2 end-->
                     
                     
                     <div class="moban3">
                          <div class="moban1_top">
                               <div class="news1 fontsize16 fontweightbload">ppt视频教程</div>
                               <div class="more"><img src="../images/mode_03.jpg" /></div>
                          </div><!--moban1_top end-->
                          <div class="moban1_bottom">
                               <div class="moban1_bottom">
                                  <div class="line1">
                                       <div class="sanjiao"><img src="../images/sanjiao_03.jpg" /></div>
                                       <div class="text">ppt下载有奖，欢迎下载ppt模板</div>
                                       <div class="time">2012-11-22</div>
                                  </div>
                                  <div class="line1">
                                      <div class="sanjiao"><img src="../images/sanjiao_03.jpg" /></div>
                                      <div class="text">ppt下载有奖，欢迎下载ppt模板</div>
                                      <div class="time">2012-11-22</div>
                                  </div>
                                 <div class="line1">
                                      <div class="sanjiao"><img src="../images/sanjiao_03.jpg" /></div>
                                      <div class="text">ppt下载有奖，欢迎下载ppt模板</div>
                                      <div class="time">2012-11-22</div>
                                 </div>
                                 <div class="line1">
                                      <div class="sanjiao"><img src="../images/sanjiao_03.jpg" /></div>
                                      <div class="text">ppt下载有奖，欢迎下载ppt模板</div>
                                      <div class="time">2012-11-22</div>
                                 </div>
                                 <div class="line1">
                                      <div class="sanjiao"><img src="../images/sanjiao_03.jpg" /></div>
                                      <div class="text">ppt下载有奖，欢迎下载ppt模板</div>
                                      <div class="time">2012-11-22</div>
                                 </div>
                           </div>
                          </div>  
                      </div><!--moban3 end-->
                     
               </div>
               <!--模板行结束-->
                 
                <div class="fanlizhanshi">
                     <div class="tianchong" ></div><!--填充  end-->
                     <div class="moban1_top">
                          <div class="news fontsize16 fontweightbload">范例展示</div>
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
                                   <dt><img src="../images/flzs_03.jpg" alt="ppt模板" title="ppt模板" /></dt>
                                   <dd>环保ppt模板</dd> 
                               </dl>
                          </div>
                          <div class="pic1">
                               <dl>
                                  <dt><img src="../images/flzs_03.jpg" alt="ppt模板" title="ppt模板" /></dt>
                                  <dd>环保ppt模板</dd>
                             </dl>
                          </div>
                          <div class="pic1">
                               <dl>
                                   <dt><img src="../images/flzs_03.jpg" alt="ppt模板" title="ppt模板" /></dt>
                                   <dd>环保ppt模板</dd>
                               </dl>
                          </div>
                          <div class="pic1">
                               <dl>
                                   <dt><img src="../images/flzs_03.jpg" alt="ppt模板" title="ppt模板" /></dt>
                                   <dd>环保ppt模板</dd>
                               </dl>
                          </div>
                          <div class="pic1">
                               <dl>
                                   <dt><img src="../images/flzs_03.jpg" alt="ppt模板" title="ppt模板" /></dt>
                                   <dd>环保ppt模板</dd>
                               </dl>
                          </div>
                     </div> <!--fanli_head end--> 
                     
                     <div class="fanli_row fanli_row_underlinee">
                          <div class="pic1">
                               <dl>
                                   <dt><img src="../images/flzs_03.jpg" alt="ppt模板" title="ppt模板" /></dt>
                                   <dd>环保ppt模板</dd> 
                               </dl>
                          </div>
                          <div class="pic1">
                               <dl>
                                  <dt><img src="../images/flzs_03.jpg" alt="ppt模板" title="ppt模板" /></dt>
                                  <dd>环保ppt模板</dd>
                             </dl>
                          </div>
                          <div class="pic1">
                               <dl>
                                   <dt><img src="../images/flzs_03.jpg" alt="ppt模板" title="ppt模板" /></dt>
                                   <dd>环保ppt模板</dd>
                               </dl>
                          </div>
                          <div class="pic1">
                               <dl>
                                   <dt><img src="../images/flzs_03.jpg" alt="ppt模板" title="ppt模板" /></dt>
                                   <dd>环保ppt模板</dd>
                               </dl>
                          </div>
                          <div class="pic1">
                               <dl>
                                   <dt><img src="../images/flzs_03.jpg" alt="ppt模板" title="ppt模板" /></dt>
                                   <dd>环保ppt模板</dd>
                               </dl>
                          </div>
                     </div><!--fanli_middle end-->
                     
                     <div class="fanli_footer">
                          <div class="pic1">
                               <dl>
                                   <dt><img src="../images/flzs_03.jpg" alt="ppt模板" title="ppt模板" /></dt>
                                   <dd>环保ppt模板</dd> 
                               </dl>
                          </div>
                          <div class="pic1">
                               <dl>
                                  <dt><img src="../images/flzs_03.jpg" alt="ppt模板" title="ppt模板" /></dt>
                                  <dd>环保ppt模板</dd>
                             </dl>
                          </div>
                          <div class="pic1">
                               <dl>
                                   <dt><img src="../images/flzs_03.jpg" alt="ppt模板" title="ppt模板" /></dt>
                                   <dd>环保ppt模板</dd>
                               </dl>
                          </div>
                          <div class="pic1">
                               <dl>
                                   <dt><img src="../images/flzs_03.jpg" alt="ppt模板" title="ppt模板" /></dt>
                                   <dd>环保ppt模板</dd>
                               </dl>
                          </div>
                          <div class="pic1">
                               <dl>
                                   <dt><img src="../images/flzs_03.jpg" alt="ppt模板" title="ppt模板" /></dt>
                                   <dd><a href="details.php?id=1">环保ppt模板</a></dd>
                               </dl>
                          </div>
                     </div>
                </div>
                <!--模板列表展示行结束-->
                
                
			<!--牛娟  end-->


	
<?php 
	include_once("foot.php");
?>