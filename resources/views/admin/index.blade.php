@extends('admin.layout.layout')
@section('content')
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">نظام شركة الجــــود</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">الرئيسية</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">لوحة التحكم</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->

								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
                                    <div class="row g-5 g-xl-8">
										<!--begin::Col-->
										<div class="col-xl-4">
											<!--begin::Mixed Widget 1-->
											<div class="card card-xl-stretch mb-xl-8">
												<!--begin::Body-->
												<div class="card-body p-0">
													<!--begin::Header-->
													<div class="px-9 pt-7 card-rounded h-275px w-100 bg-primary">
														<!--begin::Heading-->
														<div class="d-flex flex-stack">
															<h3 class="m-0 text-white fw-bold fs-3">دولار / شيكل	</h3>
															<div class="ms-1">
																<!--begin::Menu-->
																<button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color-primary border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
																	<span class="svg-icon svg-icon-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor"></rect>
																				<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
																				<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
																				<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
																			</g>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</button>

																<!--end::Menu-->
															</div>
														</div>
														<!--end::Heading-->
														<!--begin::Balance-->
														<div class="d-flex text-center flex-column text-white pt-8">
															<span class="fw-semibold fs-7">أسعـــار البيع والشراء لهذا اليوم</span>
															<span class="fw-bold fs-2x pt-1">{{ $coinses->updated_at->format('d/m/Y - H:i') }}</span>
														</div>
														<!--end::Balance-->
													</div>
													<!--end::Header-->
													<!--begin::Items-->
													<div class="bg-body shadow-sm card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1" style="margin-top: -100px">
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Symbol-->
															<div class="symbol symbol-45px w-40px me-5">
																<span class="symbol-label bg-lighten">
																	<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
																	<span class="svg-icon svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z" fill="currentColor"></path>
																			<path d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z" fill="currentColor"></path>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Description-->
															<div class="d-flex align-items-center flex-wrap w-100">
																<!--begin::Title-->
																<div class="mb-1 pe-3 flex-grow-1">
																	<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">شـــــــراء</a>

																</div>
																<!--end::Title-->
																<!--begin::Label-->
																<div class="d-flex align-items-center">
																	<div class="fw-bold fs-5 text-gray-800 pe-1">{{ $coinses->dollars_shekels_sale }}</div>
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-success ms-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Label-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Symbol-->
															<div class="symbol symbol-45px w-40px me-5">
																<span class="symbol-label bg-lighten">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																	<span class="svg-icon svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor"></rect>
																			<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor"></rect>
																			<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor"></rect>
																			<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Description-->
															<div class="d-flex align-items-center flex-wrap w-100">
																<!--begin::Title-->
																<div class="mb-1 pe-3 flex-grow-1">
																	<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">بيــــع</a>

																</div>
																<!--end::Title-->
																<!--begin::Label-->
																<div class="d-flex align-items-center">
																	<div class="fw-bold fs-5 text-gray-800 pe-1">{{ $coinses->dollars_shekels_buying }}</div>
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-danger ms-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor"></rect>
																			<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor"></path>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Label-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
                                                            <a href="{{ route('admin.coins.index') }}" class="btn btn-primary w-100 py-3">التعديل على الأسعار</a>
														</div>
														<!--end::Item-->

													</div>
													<!--end::Items-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Mixed Widget 1-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-4">
											<!--begin::Mixed Widget 1-->
											<div class="card card-xl-stretch mb-xl-8">
												<!--begin::Body-->
												<div class="card-body p-0">
													<!--begin::Header-->
													<div class="px-9 pt-7 card-rounded h-275px w-100 bg-danger">
														<!--begin::Heading-->
														<div class="d-flex flex-stack">
															<h3 class="m-0 text-white fw-bold fs-3">دينار / شيكل	</h3>
															<div class="ms-1">
																<!--begin::Menu-->
																<button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color-danger border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
																	<span class="svg-icon svg-icon-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor"></rect>
																				<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
																				<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
																				<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
																			</g>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</button>

																<!--end::Menu-->
															</div>
														</div>
														<!--end::Heading-->
														<!--begin::Balance-->
														<div class="d-flex text-center flex-column text-white pt-8">
															<span class="fw-semibold fs-7">أسعـــار البيع والشراء لهذا اليوم</span>
															<span class="fw-bold fs-2x pt-1">{{ $coinses->updated_at->format('d/m/Y - H:i') }}</span>
														</div>
														<!--end::Balance-->
													</div>
													<!--end::Header-->
													<!--begin::Items-->
													<div class="bg-body shadow-sm card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1" style="margin-top: -100px">
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Symbol-->
															<div class="symbol symbol-45px w-40px me-5">
																<span class="symbol-label bg-lighten">
																	<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
																	<span class="svg-icon svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z" fill="currentColor"></path>
																			<path d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z" fill="currentColor"></path>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Description-->
															<div class="d-flex align-items-center flex-wrap w-100">
																<!--begin::Title-->
																<div class="mb-1 pe-3 flex-grow-1">
																	<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">شـــــــراء</a>

																</div>
																<!--end::Title-->
																<!--begin::Label-->
																<div class="d-flex align-items-center">
																	<div class="fw-bold fs-5 text-gray-800 pe-1">{{ $coinses->dinar_shekel_sale }}</div>
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-success ms-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Label-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Symbol-->
															<div class="symbol symbol-45px w-40px me-5">
																<span class="symbol-label bg-lighten">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																	<span class="svg-icon svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor"></rect>
																			<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor"></rect>
																			<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor"></rect>
																			<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Description-->
															<div class="d-flex align-items-center flex-wrap w-100">
																<!--begin::Title-->
																<div class="mb-1 pe-3 flex-grow-1">
																	<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">بيــــع</a>

																</div>
																<!--end::Title-->
																<!--begin::Label-->
																<div class="d-flex align-items-center">
																	<div class="fw-bold fs-5 text-gray-800 pe-1">{{ $coinses->dinar_shekel_buying }}</div>
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-danger ms-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor"></rect>
																			<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor"></path>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Label-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
                                                            <a href="{{ route('admin.coins.index') }}" class="btn btn-primary bg-danger w-100 py-3">التعديل على الأسعار</a>
														</div>
														<!--end::Item-->

													</div>
													<!--end::Items-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Mixed Widget 1-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-4">
											<!--begin::Mixed Widget 1-->
											<div class="card card-xl-stretch mb-5 mb-xl-8">
												<!--begin::Body-->
												<div class="card-body p-0">
													<!--begin::Header-->
													<div class="px-9 pt-7 card-rounded h-275px w-100 bg-success">
														<!--begin::Heading-->
														<div class="d-flex flex-stack">
															<h3 class="m-0 text-white fw-bold fs-3">دولار / دينار	</h3>
															<div class="ms-1">
																<!--begin::Menu-->
																<button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color-success border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
																	<span class="svg-icon svg-icon-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor"></rect>
																				<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
																				<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
																				<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
																			</g>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</button>

																<!--end::Menu-->
															</div>
														</div>
														<!--end::Heading-->
														<!--begin::Balance-->
														<div class="d-flex text-center flex-column text-white pt-8">
															<span class="fw-semibold fs-7">أسعـــار البيع والشراء لهذا اليوم</span>
															<span class="fw-bold fs-2x pt-1">{{ $coinses->updated_at->format('d/m/Y - H:i') }}</span>
														</div>
														<!--end::Balance-->
													</div>
													<!--end::Header-->
													<!--begin::Items-->
													<div class="bg-body shadow-sm card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1" style="margin-top: -100px">
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Symbol-->
															<div class="symbol symbol-45px w-40px me-5">
																<span class="symbol-label bg-lighten">
																	<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
																	<span class="svg-icon svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z" fill="currentColor"></path>
																			<path d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z" fill="currentColor"></path>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
																<!--begin::Description-->
                                                                <div class="d-flex align-items-center flex-wrap w-100">
                                                                    <!--begin::Title-->
                                                                    <div class="mb-1 pe-3 flex-grow-1">
                                                                        <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">شـــــــراء</a>

                                                                    </div>
                                                                    <!--end::Title-->
                                                                    <!--begin::Label-->
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="fw-bold fs-5 text-gray-800 pe-1">{{ $coinses->dollars_dinars_sale }}</div>
                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-1">
                                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                                                                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </div>
                                                                    <!--end::Label-->
                                                                </div>
                                                                <!--end::Description-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Symbol-->
															<div class="symbol symbol-45px w-40px me-5">
																<span class="symbol-label bg-lighten">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																	<span class="svg-icon svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor"></rect>
																			<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor"></rect>
																			<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor"></rect>
																			<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Description-->
															<div class="d-flex align-items-center flex-wrap w-100">
																<!--begin::Title-->
																<div class="mb-1 pe-3 flex-grow-1">
																	<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">بيــــع</a>

																</div>
																<!--end::Title-->
																<!--begin::Label-->
																<div class="d-flex align-items-center">
																	<div class="fw-bold fs-5 text-gray-800 pe-1">{{ $coinses->dollars_dinars_buying }}</div>
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-danger ms-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor"></rect>
																			<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor"></path>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Label-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
                                                            <a href="{{ route('admin.coins.index') }}" class="btn btn-primary bg-success w-100 py-3">التعديل على الأسعار</a>
														</div>
														<!--end::Item-->

													</div>
													<!--end::Items-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Mixed Widget 1-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-4">
											<!--begin::Mixed Widget 1-->
											<div class="card card-xl-stretch mb-xl-8">
												<!--begin::Body-->
												<div class="card-body p-0">
													<!--begin::Header-->
													<div class="px-9 pt-7 card-rounded h-275px w-100 bg-dangerer">
														<!--begin::Heading-->
														<div class="d-flex flex-stack">
															<h3 class="m-0 text-white fw-bold fs-3">يورو / شيكل	</h3>
															<div class="ms-1">
																<!--begin::Menu-->
																<button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color-danger border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
																	<span class="svg-icon svg-icon-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor"></rect>
																				<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
																				<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
																				<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
																			</g>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</button>

																<!--end::Menu-->
															</div>
														</div>
														<!--end::Heading-->
														<!--begin::Balance-->
														<div class="d-flex text-center flex-column text-white pt-8">
															<span class="fw-semibold fs-7">أسعـــار البيع والشراء لهذا اليوم</span>
															<span class="fw-bold fs-2x pt-1">{{ $coinses->updated_at->format('d/m/Y - H:i') }}</span>
														</div>
														<!--end::Balance-->
													</div>
													<!--end::Header-->
													<!--begin::Items-->
													<div class="bg-body shadow-sm card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1" style="margin-top: -100px">
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Symbol-->
															<div class="symbol symbol-45px w-40px me-5">
																<span class="symbol-label bg-lighten">
																	<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
																	<span class="svg-icon svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z" fill="currentColor"></path>
																			<path d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z" fill="currentColor"></path>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Description-->
															<div class="d-flex align-items-center flex-wrap w-100">
																<!--begin::Title-->
																<div class="mb-1 pe-3 flex-grow-1">
																	<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">شـــــــراء</a>

																</div>
																<!--end::Title-->
																<!--begin::Label-->
																<div class="d-flex align-items-center">
																	<div class="fw-bold fs-5 text-gray-800 pe-1">{{ $coinses->euro_shekel_sale }}</div>
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-success ms-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Label-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Symbol-->
															<div class="symbol symbol-45px w-40px me-5">
																<span class="symbol-label bg-lighten">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																	<span class="svg-icon svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor"></rect>
																			<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor"></rect>
																			<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor"></rect>
																			<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Description-->
															<div class="d-flex align-items-center flex-wrap w-100">
																<!--begin::Title-->
																<div class="mb-1 pe-3 flex-grow-1">
																	<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">بيــــع</a>

																</div>
																<!--end::Title-->
																<!--begin::Label-->
																<div class="d-flex align-items-center">
																	<div class="fw-bold fs-5 text-gray-800 pe-1">{{ $coinses->euro_shekel_buying }}</div>
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-danger ms-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor"></rect>
																			<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor"></path>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Label-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Item-->

														<!--begin::Item-->
														<div class="d-flex align-items-center">
                                                            <a href="{{ route('admin.coins.index') }}" class="btn btn-primary bg-dangerer w-100 py-3">التعديل على الأسعار</a>
														</div>
														<!--end::Item-->
													</div>
													<!--end::Items-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Mixed Widget 1-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-4">
											<!--begin::Mixed Widget 1-->
											<div class="card card-xl-stretch mb-5 mb-xl-8">
												<!--begin::Body-->
												<div class="card-body p-0">
													<!--begin::Header-->
													<div class="px-9 pt-7 card-rounded h-275px w-100 bg-successes">
														<!--begin::Heading-->
														<div class="d-flex flex-stack">
															<h3 class="m-0 text-white fw-bold fs-3">الرسائل الواردة</h3>
															<div class="ms-1">
																<!--begin::Menu-->
																<button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color-success border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
																	<span class="svg-icon svg-icon-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor"></rect>
																				<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
																				<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
																				<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
																			</g>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</button>

																<!--end::Menu-->
															</div>
														</div>
														<!--end::Heading-->

													</div>
													<!--end::Header-->
													<!--begin::Items-->
													<div class="bg-body shadow-sm card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1" style="margin-top: -100px">
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Symbol-->
															<div class="symbol symbol-45px w-40px me-5">
																<span class="symbol-label bg-lighten">
																	<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
																	<span class="svg-icon svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z" fill="currentColor"></path>
																			<path d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z" fill="currentColor"></path>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Description-->
															<div class="d-flex align-items-center flex-wrap w-100">
																<!--begin::Title-->
																<div class="mb-1 pe-3 flex-grow-1">
																	<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">عدد الرسائل الواردة</a>

																</div>
																<!--end::Title-->
																<!--begin::Label-->
																<div class="d-flex align-items-center">
																	<div class="fw-bold fs-5 text-gray-800 pe-1">{{ $messages_count }}</div>
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-success ms-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Label-->
															</div>
															<!--end::Description-->

														</div>
	<!--begin::Description-->
    <div class="d-flex align-items-center flex-wrap w-100">

        <a href="{{ route('admin.messages.index') }}" class="btn btn-primary bg-successes w-100 py-3">الإطلاع على الرسائل</a>
    </div>
    <!--end::Description-->
													</div>
													<!--end::Items-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Mixed Widget 1-->
										</div>
										<!--end::Col-->
									</div>

								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
@endsection
