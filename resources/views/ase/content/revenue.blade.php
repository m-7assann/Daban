        <div>
            <div class="card h-100">
                <div class="card-header">
                    <ul class="nav nav-pills" role="tablist">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-tabs-line-card-income" aria-controls="navs-tabs-line-card-income"
                            aria-selected="true">
                            Income
                        </button>
                    </ul>
                </div>
                <div class="card-body px-0">
                    <div class="tab-content p-0">
                        <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                            <div class="d-flex p-4 pt-3">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="{{ asset('ase/assets/img/icons/unicons/wallet.png') }}" alt="User" />
                                </div>
                                <div>
                                    <small class="text-muted d-block">Total Balance</small>
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 me-1" id="monthlyRevenue">$0.00</h6>
                                        <small class="text-success fw-semibold">
                                            <i class="bx bx-chevron-up"></i>
                                            <span id="revenuePercentage"></span>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div id="incomeChart"></div>
                            <div class="d-flex justify-content-center pt-4 gap-2">
                                <div class="flex-shrink-0">
                                    <div id="expensesOfWeek"></div>
                                </div>
                                <div>
                                    <p class="mb-n1 mt-1">Revenue This Week</p>
                                    <small class="text-muted" id="revenueComparison"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
