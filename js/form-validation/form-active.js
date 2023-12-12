(function ($) {
	"use strict";
	// Validation for employee form
	$(".add-employee").validate(
		{
			rules:
			{
				firstname:
				{
					required: true,
					maxlength: 50
				},
				lastname:
				{
					required: true,
					maxlength: 50
				},
				address:
				{
					required: true
				},
				birthdate:
				{
					required: true
				},
				contact:
				{
					maxlength: 100
				},
				gender:
				{
					required: true
				},
				position:
				{
					required: true
				},
				schedule:
				{
					required: true
				}
			},
			messages:
			{
				firstname:
				{
					required: 'Vui lòng nhập thông tin',
					maxlength: 'Nhập tối đa 50 ký tự'
				},
				lastname:
				{
					required: 'Vui lòng nhập thông tin',
					maxlength: 'Nhập tối đa 50 ký tự'
				},
				address:
				{
					required: 'Vui lòng nhập thông tin'
				},
				birthdate:
				{
					required: 'Vui lòng nhập ngày sinh'
				},
				contact:
				{
					maxlength: 'Vui lòng nhập không quá 100 ký tự'
				},
				gender:
				{
					required: 'Vui lòng chọn giới tính'
				},
				position:
				{
					required: 'Vui lòng chọn vị trí'
				},
				schedule:
				{
					required: 'Vui lòng chọn ca làm việc'
				}
			},

			errorPlacement: function (error, element) {
				error.insertAfter(element.parent());
			}
		});


	$(".edit-employee").validate(
		{
			rules:
			{
				firstname:
				{
					required: true,
					maxlength: 50
				},
				lastname:
				{
					required: true,
					maxlength: 50
				},
				address:
				{
					required: true
				},
				birthdate:
				{
					required: true
				},
				contact:
				{
					maxlength: 100
				},
				gender:
				{
					required: true
				},
				position:
				{
					required: true
				},
				schedule:
				{
					required: true
				}
			},
			messages:
			{
				firstname:
				{
					required: 'Vui lòng nhập thông tin',
					maxlength: 'Nhập tối đa 50 ký tự'
				},
				lastname:
				{
					required: 'Vui lòng nhập thông tin',
					maxlength: 'Nhập tối đa 50 ký tự'
				},
				address:
				{
					required: 'Vui lòng nhập thông tin'
				},
				birthdate:
				{
					required: 'Vui lòng nhập ngày sinh'
				},
				contact:
				{
					maxlength: 'Vui lòng nhập không quá 100 ký tự'
				},
				gender:
				{
					required: 'Vui lòng chọn giới tính'
				},
				position:
				{
					required: 'Vui lòng chọn vị trí'
				},
				schedule:
				{
					required: 'Vui lòng chọn ca làm việc'
				}
			},

			errorPlacement: function (error, element) {
				error.insertAfter(element.parent());
			}
		});

	// Validation for position form
	$(".add-position").validate(
		{
			rules:
			{
				title:
				{
					required: true,
					maxlength: 150
				},
				rate:
				{
					required: true,
					min: 1
				},
			},
			messages:
			{
				title:
				{
					required: 'Vui lòng nhập tên vị trí',
					maxlength: 'Nhập tối đa 150 ký tự'
				},
				rate:
				{
					required: 'Vui lòng nhập số tiền lương/giờ',
					min: 'Vui lòng nhập số nguyên dương'
				}
			},

			errorPlacement: function (error, element) {
				error.insertAfter(element.parent());
			}
		});

	$(".edit-position").validate(
		{
			rules:
			{
				title:
				{
					required: true,
					maxlength: 150
				},
				rate:
				{
					required: true,
					min: 1
				},
			},
			messages:
			{
				title:
				{
					required: 'Vui lòng nhập tên vị trí',
					maxlength: 'Nhập tối đa 150 ký tự'
				},
				rate:
				{
					required: 'Vui lòng nhập số tiền lương/giờ',
					min: 'Vui lòng nhập số nguyên dương'
				}
			},

			errorPlacement: function (error, element) {
				error.insertAfter(element.parent());
			}
		});
	// Validation for deduction form
	$(".add-deduction").validate(
		{
			rules:
			{
				description:
				{
					required: true,
					maxlength: 150
				},
				amount:
				{
					required: true,
					min: 1
				},
			},
			messages:
			{
				description:
				{
					required: 'Vui lòng nhập mô tả khấu trừ',
					maxlength: 'Nhập tối đa 150 ký tự'
				},
				amount:
				{
					required: 'Vui lòng nhập lượng tiền khấu trừ',
					min: 'Vui lòng nhập số nguyên dương'
				}
			},

			errorPlacement: function (error, element) {
				error.insertAfter(element.parent());
			}
		});

	$(".edit-deduction").validate(
		{
			rules:
			{
				description:
				{
					required: true,
					maxlength: 150
				},
				amount:
				{
					required: true,
					min: 1
				},
			},
			messages:
			{
				description:
				{
					required: 'Vui lòng nhập tên vị trí',
					maxlength: 'Nhập tối đa 150 ký tự'
				},
				amount:
				{
					required: 'Vui lòng nhập số tiền lương/giờ',
					min: 'Vui lòng nhập số nguyên dương'
				}
			},

			errorPlacement: function (error, element) {
				error.insertAfter(element.parent());
			}
		});


	// Validation for changing password form
	$(".change-password").validate(
		{
			rules:
			{
				pass_old:
				{
					required: true,
				},
				pass_new:
				{
					required: true,
				},
			},
			messages:
			{
				pass_old:
				{
					required: 'Vui lòng nhập mật khẩu cũ'
				},
				pass_new:
				{
					required: 'Vui lòng nhập mật khẩu mới'
				}
			},

			errorPlacement: function (error, element) {
				error.insertAfter(element.parent());
			}
		});

	// Validation for login form
	$("#comment").validate(
		{
			rules:
			{
				name:
				{
					required: true
				},
				message:
				{
					required: true
				},
				email:
				{
					required: true,
					email: true
				}
			},
			messages:
			{
				name:
				{
					required: 'Please enter your name'
				},
				message:
				{
					required: 'Please enter your message'
				},
				email:
				{
					required: 'Please enter your email address',
					email: 'Please enter a VALID email address'
				}
			},

			errorPlacement: function (error, element) {
				error.insertAfter(element.parent());
			}
		});


	// Validation for login form
	$(".addlibrary").validate(
		{
			rules:
			{
				nameasset:
				{
					required: true
				},
				subject:
				{
					required: true
				},
				imageico:
				{
					required: true
				},
				type:
				{
					required: true
				},
				price:
				{
					required: true
				},
				year:
				{
					required: true
				},
				status:
				{
					required: true
				},
				department:
				{
					required: true
				},
				email:
				{
					required: true,
					email: true
				}
			},
			messages:
			{
				nameasset:
				{
					required: 'Please enter your name of assets'
				},
				subject:
				{
					required: 'Please enter your subject'
				},
				imageico:
				{
					required: 'Please enter image'
				},
				department:
				{
					required: 'Please enter your department'
				},
				type:
				{
					required: 'Please enter library type'
				},
				price:
				{
					required: 'Please enter price'
				},
				year:
				{
					required: 'Please enter year'
				},
				status:
				{
					required: 'Please enter status'
				},
				email:
				{
					required: 'Please enter your email address',
					email: 'Please enter a VALID email address'
				}
			},

			errorPlacement: function (error, element) {
				error.insertAfter(element.parent());
			}
		});

	// Validation for login form
	$(".add-department").validate(
		{
			rules:
			{
				name:
				{
					required: true
				},
				headofdepartment:
				{
					required: true
				},
				email:
				{
					required: true
				},
				phone:
				{
					required: true
				},
				noofstudent:
				{
					required: true
				},
				status:
				{
					required: true
				}
			},
			messages:
			{
				name:
				{
					required: 'Please enter your name'
				},
				headofdepartment:
				{
					required: 'Please enter head of department'
				},
				email:
				{
					required: 'Please enter email'
				},
				phone:
				{
					required: 'Please enter your phone'
				},
				noofstudent:
				{
					required: 'Please enter no of student'
				},
				status:
				{
					required: 'Please enter status'
				}
			},

			errorPlacement: function (error, element) {
				error.insertAfter(element.parent());
			}
		});

	// Validation for login form
	$("#send-mail").validate(
		{
			rules:
			{
				name:
				{
					required: true
				},
				headofdepartment:
				{
					required: true
				},
				email:
				{
					required: true,
					email: true
				},
				phone:
				{
					required: true
				},
				noofstudent:
				{
					required: true
				},
				status:
				{
					required: true
				}
			},
			messages:
			{
				name:
				{
					required: 'Please enter your name'
				},
				headofdepartment:
				{
					required: 'Please enter head of department'
				},
				email:
				{
					required: 'Please enter email'
				},
				email:
				{
					required: 'Please enter your email address',
					email: 'Please enter a VALID email address'
				},
				noofstudent:
				{
					required: 'Please enter no of student'
				},
				status:
				{
					required: 'Please enter status'
				}
			},

			errorPlacement: function (error, element) {
				error.insertAfter(element.parent());
			}
		});


})(jQuery); 