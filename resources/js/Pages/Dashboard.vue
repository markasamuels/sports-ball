<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

				<div class="container">

					<div class="row mb-2">
						<div class="col-sm-12">
							<div id="new-game" class="btn btn-success float-end" onclick="newGame()">New Game</div>&nbsp;&nbsp;
						</div>
					</div>

					<div class="row" style="background-color:#2c442c; border-radius: 5px">

							<div id="racetrack" class="col-sm-9">

								<div id="horse1" class="horse"><span id="h1" class="foo">horse1</span></div>
								<div id="horse2" class="horse"><span id="h2" class="foo">horse2</span></div>
								<div id="horse3" class="horse"><span id="h3" class="foo">horse3</span></div>
								<div id="horse4" class="horse"><span id="h4" class="foo">horse4</span></div>


							</div>
							
							<div class="col-sm-3" style="border-left: 2px dotted #fff; ">
								<span></span>
							</div>

					
					</div><!-- end -->

					<div class="row" style="background-color:black; padding-top: 5px">
					
							<!--<div id="chose-winner">-->

								<div class="row">
									<div class="col-sm-12">
										<label><h4  style="color:white">Pick Your Horse:</h4></label> <br />
									</div>
								</div>

							<!--</div> end choose-winner -->

					</div>

					<!-- Start dash -->
					<div class="row">

						<div class="col-sm-6">

							<div class="row">

								<div class="col-sm-12">
								
								<button type="button" class="btn btn-primary" id="myhorse1" value="Horse 1" onclick="pickHorse(this, 'h1')">
									Horse1
								</button>
							
								<button type="button" class="btn btn-primary" id="myhorse2" value="Horse 2" onclick="pickHorse(this, 'h2')">
									Horse2
								</button>
							
							
								<button type="button" class="btn btn-primary" id="myhorse3" value="Horse 3" onclick="pickHorse(this, 'h3')">
									Horse3
								</button>
							
							
								<button type="button" class="btn btn-primary" id="myhorse4" value="Horse 4" onclick="pickHorse(this, 'h4')">
									Horse4
								</button>
								 
								</div>

							</div>

							<div class="row">
								<div class="col-sm-6">
									<label><h4  style="color:white">Place Bet (SATS):</h4></label>
								</div>
								<div class="col-sm-6">
									1 sat = 0.00000001 BTC
								</div>
							</div>

							<div class="row">
								<div class="col-sm-3">
									<select class="form-select" aria-label="Default select example" onchange="setAmt(this)">
									  <option selected>SATS</option>
									  <option value="1">1</option>
									  <option value="2">2</option>
									  <option value="3">3</option>
									</select>
								</div>
							</div>

							<br />

							<div class="row">
								<div class="col-sm-12">
									<div class="d-grid gap-2">
										<button type="button" class="btn btn-success" id="play"  onclick="start()">Play</button>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-6">

							Balance: <span id="bal">10 SAT</span>
							<hr />
							Bet: <span id="bet"></span>
							<hr />
							Fee: 1 SAT
							<hr />
							
						</div>
					
					</div>
					<!-- End dash -->


					<div class="row" style="background-color:black">

						<div class="col-sm-6">
						
							<div id="selected-horse"></div>

						</div>
						
						<div class="col-sm-6">
							<div id="winning-horse"></div>
						</div>
						
					</div>


				</div> <!-- end container -->

            </div>
        </div>
    </AuthenticatedLayout>
</template>
