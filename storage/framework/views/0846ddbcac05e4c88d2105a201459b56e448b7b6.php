<!-- All news area Start Here-->
<div class="all-news-area sec-spacer">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
                        <h3 class="title-bg">Latest Posts</h3>
                        <div class="row">
			        		<div class="col-sm-9">
					        	<div class="latest-news-slider">
                                    <?php
                                     for($i = 0; $i < count($posts); $i++)
                                     {
                                        $p = $posts[$i];
                                        $pu = url($p['url']);
                                    ?>
					        		<div>
										<div class="news-normal-block">
						                    <div class="news-img">
						                    	<a href="<?php echo e($pu); ?>">
						                        	<img src="<?php echo e($p['img']); ?>" alt="" />
						                    	</a>
						                    </div>
					                    	<h4 class="news-title"><a href="<?php echo e($pu); ?>"><?php echo e($p['title']); ?></a></h4>
					                    	<div class="news-desc">
					                    		<p>
					                    			<?php echo e($p['summary']); ?>

					                    		</p>
					                    	</div>
					                    	<div class="news-btn">
					                    		<a class="primary-btn" href="<?php echo e($pu); ?>">Read More</a>
					                    	</div>
						                </div>			        			
					        		</div>
                                    <?php
                                    }
                                    ?>
					        	</div>			        			
			        		</div>
			        		<div class="col-sm-3">			        			
					        	<div class="latest-news-nav">
                                    <?php
                                     foreach($posts as $p)
                                     {
                                    ?>
									  <div><img src="<?php echo e($p['img']); ?>" alt="" /></div>
                                    <?php
                                     }
                                    ?>
								</div>
			        		</div>
			        	</div>
                    </div>
					<div class="col-md-4">
						<div class="sidebar-area right-side-area">
							<h3 class="title-bg">Recent Results</h3>
							<div class="today-match-teams text-center">
								<div class="overly-bg"></div>
								<div class="title-head">
									<h4>Last Match Result</h4>
									<span class="date">Sunday, March 20th,2017</span>
								</div>
								<div class="today-score">
									<div class="today-match-team">
										<img src="images/today-match/1.png" alt="" />
										<h4>Trisal King</h4>
										<span>SKFC</span>
									</div>
									<div class="today-final-score">
										07 <span>-</span> 02
										<h4>final score</h4>
									</div>
									<div class="today-match-team">
										<img src="images/today-match/2.png" alt="" />
										<h4>Mirpur King</h4>
										<span>SWFC</span>
									</div>
								</div>
                                <div class="title-head">
                                    <h4>Previous Results</h4>
                                </div>
                                <div class="recent-match-results">
                                    <div class="single-result">
                                        <div class="team-result clearfix">
                                            <div class="text-left match-result-list single-part"><img class="result-img" src="images/today-match/1.png">Badda FC</div>
                                            <div class="text-center match-score single-part">
                                                <span class="score">3</span> - <span class="score">2</span>
                                            </div>
                                            <div class="text-left match-result-list single-part"><img class="result-img" src="images/today-match/2.png" alt="Spain">Trisal FC</div>
                                        </div>
                                    </div>
                                    <div class="single-result">
                                        <div class="team-result clearfix">
                                            <div class="text-left match-result-list single-part"><img class="result-img" src="images/today-match/1.png">Banani FC</div>
                                            <div class="text-center match-score single-part">
                                                <span class="score">4</span> - <span class="score">3</span>
                                            </div>
                                            <div class="text-left match-result-list single-part"><img class="result-img" src="images/today-match/2.png" alt="Spain">Mirpur FC</div>
                                        </div>
                                    </div>
                                    <div class="single-result">
                                        <div class="team-result clearfix">
                                            <div class="text-left match-result-list single-part"><img class="result-img" src="images/today-match/1.png">Jpypur FC</div>
                                            <div class="text-center match-score single-part">
                                                <span class="score">2</span> - <span class="score">4</span>
                                            </div>
                                            <div class="text-left match-result-list single-part"><img class="result-img" src="images/today-match/2.png" alt="Spain">Dhoar FC</div>
                                        </div>
                                    </div>
                                    <div class="single-result">
                                        <div class="team-result clearfix">
                                            <div class="text-left match-result-list single-part"><img class="result-img" src="images/today-match/1.png">Trisal FC</div>
                                            <div class="text-center match-score single-part">
                                                <span class="score">6</span> - <span class="score">1</span>
                                            </div>
                                            <div class="text-left match-result-list single-part"><img class="result-img" src="images/today-match/2.png" alt="Spain">Romna FC</div>
                                        </div>
                                    </div>
                                    <div class="view-all-result">
                                        <a href="result.html">View All <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
				</div>
                <div class="separator-100"></div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
							<div class="col-sm-8 col-xs-8 match-view-tite">
								<h3 class="title-bg">Match fixture</h3>
							</div>
							<div class="col-sm-4 col-xs-4 text-right match-view-more">
								<a class="view-more" href="#">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
							</div>
						</div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="match-list mmb-45">
                                    <div class="overly-bg"></div>
                                    <table class="match-table">
                                        <tbody>
                                            <tr>
                                                 <td class="medium-font">Nettrok FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">Bramma FC</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Netro Stadium</td>
                                                <td><a href="#">Buy a Ticket</a></td>
                                            </tr>
                                            <tr>
                                                 <td class="medium-font">Bogro FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">Joypur FC</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Bramma Stadium</td>
                                                <td><a href="#">Buy a Ticket</a></td>
                                            </tr>
                                            <tr>
                                                 <td class="medium-font">Mirpur FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">men utd</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Golshan Stadium</td>
                                                <td><a href="#">Buy a Ticket</a></td>
                                            </tr>
                                            <tr>
                                                 <td class="medium-font">Kapa FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">Dhoar FC</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Mirpur Stadium</td>
                                                <td><a href="#">Buy a Ticket</a></td>
                                            </tr>
                                            <tr>
                                                 <td class="medium-font">Trishal FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">Banani FC</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Badda Stadium</td>
                                                <td><a href="#">Buy a Ticket</a></td>
                                            </tr>
                                            <tr>
                                                 <td class="medium-font">Badda FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">Nattrok Fc</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Mirpur Stadium</td>
                                                <td><a href="#">Buy a Ticket</a></td>
                                            </tr>
                                            <tr>
                                                 <td class="medium-font">Bramma FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">Bogro FC</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Netro Stadium</td>
                                                <td><a href="#">Buy a Ticket</a></td>
                                            </tr>
                                            <tr>
                                                 <td class="medium-font">Joypur FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">Mirpur FC</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Bramma Stadium</td>
                                                <td><a href="#">Buy a Ticket</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h3 class="title-bg">Point table</h3>
                        <div class="point-list text-center">
                            <table class="point-table">
                                <tbody>
                                    <tr>
                                         <td></td>
                                         <td class="country-name">Team</td>
                                         <td>W</td>
                                         <td>L</td>
                                         <td>P</td>
                                    </tr>
                                    <tr>
                                         <td>01</td>
                                         <td>Badda FC</td>
                                         <td>16</td>
                                         <td>6</td>
                                         <td>32</td>
                                    </tr>
                                    <tr>
                                         <td>02</td>
                                         <td class="country-name">Banani FC</td>
                                         <td>14</td>
                                         <td>7</td>
                                         <td>28</td>
                                    </tr>
                                    <tr>
                                         <td>03</td>
                                         <td class="country-name">Trishal FC</td>
                                         <td>18</td>
                                         <td>8</td>
                                         <td>26</td>
                                    </tr>
                                    <tr>
                                         <td>04</td>
                                         <td>Dhoar FC</td>
                                         <td>15</td>
                                         <td>6</td>
                                         <td>32</td>
                                    </tr>
                                    <tr>
                                         <td>05</td>
                                         <td class="country-name">Kapa FC</td>
                                         <td>22</td>
                                         <td>4</td>
                                         <td>25</td>
                                    </tr>
                                    <tr>
                                         <td>06</td>
                                         <td class="country-name">Mirpur FC</td>
                                         <td>18</td>
                                         <td>6</td>
                                         <td>27</td>
                                    </tr>
                                    <tr>
                                         <td>07</td>
                                         <td class="country-name">Joypur FC</td>
                                         <td>14</td>
                                         <td>7</td>
                                         <td>29</td>
                                    </tr>
                                    <tr>
                                         <td>08</td>
                                         <td class="country-name">Bogro FC</td>
                                         <td>17</td>
                                         <td>6</td>
                                         <td>30</td>
                                    </tr>
                                    <tr>
                                         <td>09</td>
                                         <td class="country-name">Bramma FC</td>
                                         <td>16</td>
                                         <td>8</td>
                                         <td>29</td>
                                    </tr>
                                    <tr>
                                         <td>10</td>
                                         <td class="country-name">Nattrok FC</td>
                                         <td>18</td>
                                         <td>6</td>
                                         <td>24</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a class="view-more text-left" href="point-table.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
			</div>
		</div>
		<!-- All news area end Here--><?php /**PATH C:\repos\bet-predictions\resources\views/news-area.blade.php ENDPATH**/ ?>