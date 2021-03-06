import AccountManagerApi from '../account-manager/AccountManagerApi';

// scope
(function ($, phpData) {

    phpData = phpData || {};

    /**
     * @todo: Form thêm, cập nhật, xóa account manager
     * @purpose: 
     * - mục đích: tạo, cập nhật hoặc xóa các thông tin của account manager
     * @author: Cường
     * @since: 15-01-2021
     * @param jQuery form
    */
	class FormAccountManager{
		constructor(){
			this.API = new AccountManagerApi(phpData);
		}

        /**
         * @todo: Sự kiện Create form
         * @purpose: 
         * - khi submit thì gọi lên API để tạo mới account manager
         * @author: Cường
         * @since: 15-01-2021
         * @param jQueryEvent
        */
		async onCreate(e) {

			e.stopPropagation();
            e.preventDefault();

		  	let formData = $('#form-submit').serialize() || {};

		  	await this.API.createAccountManager(formData);

	 	    Swal.fire({
			  icon: 'success',
			  title: "Đã thêm thành công!",
			  showConfirmButton: true,
			  timer: 1000
			})
	  	};

        /**
         * @todo: Sự kiện Update form
         * @purpose: 
         * - khi submit thì gọi lên API để cập nhật account manager
         * @author: Cường
         * @since: 15-01-2021
         * @param jQueryEvent
        */
	  	async onUpdate(e) {

			e.stopPropagation();
            e.preventDefault();

		  	let formData = $('#form-submit').serialize() || {};
		  	let account_manager_id = phpData['ACCOUNT_MANAGER_ID'];

		  	await this.API.updateAccountManager(formData, account_manager_id);

	 	    Swal.fire({
			  icon: 'success',
			  title: 'Đã cập nhật!',
			  showConfirmButton: true,
			  timer: 1000
			})
	  	};

        /**
         * @todo: Sự kiện Delete form
         * @purpose: 
         * - khi submit thì gọi lên API để xóa account manager
         * @author: Cường
         * @since: 15-01-2021
         * @param jQueryEvent
        */
	  	onDelete(e) {

			e.stopPropagation();
            e.preventDefault();

		  	let account_manager_id = phpData['ACCOUNT_MANAGER_ID'];

	 	    Swal.fire({
			  title: 'Are you sure?',
			  text: "You won't be able to revert this!",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Yes, delete it!'

			}).then((result) => {
			  if (result.isConfirmed) {

				this.API.deleteAccountManager(account_manager_id);

			    Swal.fire({
				  title: 'Deleted',
				  text: "Đã xóa thành công.",
				  icon: 'success',
				  confirmButtonColor: '#3085d6',
				  confirmButtonText: 'OK'

				}).then((result) => {
				  if (result.isConfirmed) {

				    location.href = phpData['WEB_ACCOUNT_MANAGERS_INDEX'];
				  }
				})
			  }
			})
	  	};

        /**
         * @todo: Hàm khởi tạo các sự kiện trong form
         * @purpose: 
         * - mục đích:
         *      tập trung các sự kiện về 1 chỗ cho dễ quản lý
         * @author: Cường
         * @since: 15-01-2021
        */
	  	initEventListeners(){
	  		//lưu ngữ cảnh của class để sử dụng lại trong func
	  		let self = this;
	  		// sự kiện bấm nút thêm mới
			$('#btn-addnew').click(function() {
			  	self.onCreate(event);
			  	self.validateInput();
			});
	  		// sự kiện bấm nút xóa
			$('#btn-delete').click(function() {
			  	self.onDelete(event);
			});
	  		// sự kiện bấm nút lưu
			$('#btn-update').click(function() {
			  	self.onUpdate(event);
			  	self.validateInput();
			});

			self.getRadioBtnValue();
		}

        /**
         * @todo: Hàm lấy giá trị của app_brand
         * @purpose: 
         * - mục đích:
         *      lấy giá trị của app_brand và set lên form trên giao diện
         *      do form::radio nên không thể tự lấy val được
         * @author: Cường
         * @since: 18-01-2021
        */
		getRadioBtnValue(){
			var app_brand = phpData['APP_BRAND'];

	        switch (app_brand){
	          case 'PMVE': $('#app_brand_pmv').prop('checked', true); 
	          break;
	          case 'WEBSITE_PMVE': $('#app_brand_wpmv').prop('checked', true); 
	          break;
	          case 'PMHANG': $('#app_brand_pmh').prop('checked', true); 
	          break;
	          case 'TRACKING_PMHANG': $('#app_brand_tpmh').prop('checked', true); 
	          break;
	          case 'NHAN_SU': $('#app_brand_ns').prop('checked', true); 
	          break;
	          case 'MANUAL': $('#app_brand_m').prop('checked', true); 
	          break;
	        }
		}

		/**
         * @todo: Hàm validate form
         * @purpose: 
         * - mục đích:
         *      kiểm tra field required nào chưa được nhập thì thực hiện thông báo
         *      thuộc tính required của input không dùng được do không dùng submit của form
         * @author: Cường
         * @since: 18-01-2021
        */
		validateInput(){
			if($('#company_name').val()==''){
				$('#company_name').tooltip('show');
				$('#company_name').addClass('required');
			}

			if($('#domain_name').val()==''){
				$('#domain_name').tooltip('show');
				$('#domain_name').addClass('required');
			}

			if($('#base_url').val()==''){
				$('#base_url').tooltip('show');
				$('#base_url').addClass('required');
			}
		}
	}

    $(function() {
      	// khởi tạo class
        let formAccountManager = new FormAccountManager();
        // khởi chạy hàm init
        formAccountManager.initEventListeners();
    });
    
}.bind(window))(jQuery, window.PHP_DATA);

