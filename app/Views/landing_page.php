<?= $this->extend('layout/container') ?>

<?= $this->section('content') ?>
<div class="grid grid-cols-1 lg:grid-cols-3 min-h-screen min-w-screen">
    <div class="col-span-2 bg-white flex justify-center items-center flex-col">
        <img src="/images/banner.png" />
        <div class="flex justify-center items-center">
            <span class="text-black text-[1.5rem] md:text-[2rem] text-center">A VIRTUAL BARANGAY FRONT DESK
                OFFICER</span>
        </div>
        <div class="flex items-center mt-5 w-full justify-center">
            <a class="focus:outline-none bg-[#223D3C] rounded-lg text-white px-10 py-2 font-bold text-[1.5rem] mr-3 md:mr-16"
                href="/login">
                LOG IN
            </a>
            <a class="focus:outline-none bg-[#223D3C] rounded-lg text-white px-10 py-2 font-bold text-[1.5rem] ml-3 md:ml-16"
                href="/register">
                REGISTER
            </a>
        </div>
    </div>
    <div class="bg-[#223D3C] flex justify-center items-center px-10 flex-col mt-10 lg:mt-0 pt-10 lg:pt-0">
        <div class="flex flex-row justify-center items-center">
            <img class="w-44 h-44 mr-5" src='/images/barangay-logo.png' />
            <span class="text-[#F2EDDB] font-black text-[2.7rem] text-center leading-tight">
                <span class="text-[2.1rem]">Brgy. M. Acevida</span> Siniloan Laguna</span>
        </div>
        <div class="flex flex-col justify-center items-center mt-10 w-full ">
            <div class="w-full border-t border-white mb-6"></div>
            <a class="text-[#F2EDDB] font-bold text-[1.8rem] text-center" href="/barangay-profile">Barangay
                Profile</a>
            <div class="w-full border-t border-white my-6"></div>
            <a class="text-[#F2EDDB] font-bold text-[1.8rem] text-center" href="/history">History</a>
            <div class="w-full border-t border-white my-6"></div>
            <a class="text-[#F2EDDB] font-bold text-[1.8rem] text-center" href="/mission-vision">Mission &
                Vision</a>
            <div class="w-full border-t border-white my-6"></div>
            <a class="text-[#F2EDDB] font-bold text-[1.8rem] text-center" href="/contact-us">Contact Us</a>
            <div class="w-full border-t border-white my-6"></div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>