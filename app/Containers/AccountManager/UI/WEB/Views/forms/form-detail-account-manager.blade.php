<form id="form_edit">
	<div class="d-flex mt-3">
		<div class="label-addnew-container">
			<p>ID</p>
		</div>
		<div class="input-addnew-container">
			{!!  Form::text(
			'id',  
			$accountManager['id'], 
			[
			'disabled'
			]) 
		!!}
		</div>
	</div>
	<div class="d-flex mt-3">
		<div class="label-addnew-container">
			<p>Tên công ty</p>
		</div>
		<div class="input-addnew-container">
		{!!  Form::text(
			'company_name',  
			$accountManager['company_name'], 
			[
			'id'    => 'company_name',
			'placeholder' => 'Tên công ty',
			'disabled'
			]) 
		!!}
		</div>
	</div>
		<div class="d-flex mt-3">
			<div class="label-addnew-container">
				<p>Tên domain</p>
			</div>
			<div class="input-addnew-container">
				{!!  Form::text(
					'company_name',  
					$accountManager['domain_name'], 
					[

					'id'    => 'domain_name',
					'placeholder' => 'Tên domain',
					'disabled'
					]
					) !!}
					<p>Chỉ nhâp tên domain (vd: nếu là 'buslines.phanmemve.vn' thì sẽ nhập 'buslines')</p>
				</div>
			</div>
			<div class="d-flex mt-3">
				<div class="label-addnew-container">
					<p>Base URL (Đường dẫn module sử dụng vd: /admin , /fronend...)</p>
				</div>
				<div class="input-addnew-container">
					{!!  Form::text(
						'company_name',  
						$accountManager['base_url'], 
						[
	
						'id'    => 'base_url',
						'placeholder' => 'Base URL',
						'disabled'
						]
						) !!} 
						<p>Mặc định ("/"), nếu nhập '/dongphuoc' thì domain đầy đủ sẽ là 'express.phanmemve.vn/dongphuoc'</p>
					</div>
				</div>
				<div class="d-flex mt-3">
					<div class="label-addnew-container">
						<p>Mã ứng dụng</p>
					</div>
					<div class="input-addnew-container">
						{!!  Form::text(
							'company_name',  
							$accountManager['app_code'], 
							[
		
							'id'    => 'app_code',
							'placeholder' => 'Mã ứng dụng',
							'disabled'
							]
							) !!} 
							<p>Mã ứng dụng là tên công ty viết liền không dấu</p>
						</div>
					</div>
					<div class="d-flex mt-3">
						<div class="label-addnew-container">
							<p>Tên ứng dụng</p>
						</div>
						<div class="input-addnew-container">
							{!!  Form::text(
								'company_name',  
								$accountManager['app_name'], 
								[
			
								'id'    => 'app_name',
								'placeholder' => 'Tên ứng dụng',
								'disabled'
								]
								) !!} 
								<p></p>
							</div>
						</div>
						<div class="d-flex mt-3">
							<div class="label-addnew-container">
								<p>Chọn loại ứng dụng</p>
							</div>
							<div class="input-radio-addnew-container">
								<div>
									{{ Form::radio('app_brand', '1', false, array('id'=>'app_brand_pmv')) }}
									{{ Form::label('app_brand_pmv', 'Phần mềm vé') }}
								</div>
								<div>
									{{ Form::radio('app_brand', '2', false, array('id'=>'app_brand_wpmv')) }}
									{{ Form::label('app_brand_wpmv', 'Website phần mềm vé') }}
								</div>
								<div>
									{{ Form::radio('app_brand', '3', false, array('id'=>'app_brand_pmh')) }}
									{{ Form::label('app_brand_pmh', 'Phần mềm hàng') }}
								</div>
								<div>
									{{ Form::radio('app_brand', '4', false, array('id'=>'app_brand_tpmh')) }}
									{{ Form::label('app_brand_tpmh', 'Tracking phần mềm hàng') }}
								</div>
								<div>
									{{ Form::radio('app_brand', '5', false, array('id'=>'app_brand_ns')) }}
									{{ Form::label('app_brand_ns', 'Nhân sự') }}
								</div>
								<div>
									{{ Form::radio('app_brand', '6', false, array('id'=>'app_brand_m')) }}
									{{ Form::label('app_brand_m', 'Manual (tự cấu hình)') }}
								</div>

							</div>
						</div>
						<div class="d-flex mt-3">
							<div class="label-addnew-container">
								<p>Site name</p>
							</div>
							<div class="input-addnew-container">
								{!!  Form::text(
									'company_name',  
									$accountManager['site_name'], 
									[
				
									'id'    => 'site_name',
									'placeholder' => 'Site name',
									'disabled'
									]
									) !!} 
									<p>Chọn tên file config phần mềm vé</p>
								</div>
							</div>
						</form>