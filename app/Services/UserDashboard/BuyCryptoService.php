<?php declare(strict_types=1);

namespace App\Services\UserDashboard;

use App\Repositories\UserDashboard\MySQLUserDashboardRepository;
use App\Repositories\UserDashboard\UserDashboardRepository;

class BuyCryptoService
{
    private UserDashboardRepository $userDashboardRepository;

    public function __construct()
    {
        $this->userDashboardRepository = new MySQLUserDashboardRepository();
    }
    public function execute(BuySellCryptoServiceRequest $request): void
    {
        $this->userDashboardRepository->buyCrypto($request);
    }
}