<div>
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Admin Profile</h3>
                </div>
            </div>
        </div> <!-- Row end  -->
        <div class="row g-3">
            <div class="col-xl-12 col-lg-10 col-md-8">
                <div class="card profile-card flex-column mb-3" style="background-image: url('{{asset('assets/images/bgs.jpg')}}'); background-size: cover; background-position: center; height: 300px; position: relative;">
                    <div class="profile-info" style="position: absolute; bottom: 15px; left: 50%; transform: translateX(-50%); text-align: center;">
                        @if ($profile)
                            <img src="{{ Storage::url($profile) }}" alt="Profile Image" style="border-radius: 50%; width: 100px; height: 100px; border: 3px solid white;">
                        @else
                            <img src="{{ asset('assets/images/xs/avatar11.svg') }}" alt="Default Profile Image" style="border-radius: 50%; width: 100px; height: 100px; border: 3px solid white;">
                        @endif
                        <p style="color: white; margin-top: 10px;">{{ $admin->name }}</p>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-10 col-md-8">
                    <div class="card mb-3">
                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold">Profile Update</h6>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent="updateProfile">
                                <div class="row">
                                    <div class="form-group col-xl-6" style="margin-bottom: 15px;">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter your name" wire:model="name">
                                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group col-xl-6 mt-3 mt-xl-0" style="margin-bottom: 15px;">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter your email" wire:model="email">
                                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="form-group col-xl-6" style="margin-bottom: 15px;">
                                        <label for="phoneNumber">Phone Number</label>
                                        <input type="text" class="form-control" id="phoneNumber" placeholder="Enter your phone number" wire:model="phoneNumber">
                                        @error('phoneNumber') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group col-xl-6">
                                        <label for="newProfileImage">Upload Image <span>(optional)</span></label>
                                        <input type="file" class="form-control" id="newProfileImage" wire:model="newProfileImage">
                                        @error('newProfileImage') <span class="text-danger">{{ $message }}</span> @enderror

                                        @if ($newProfileImage)
                                            <div class="mt-2">
                                                <img src="{{ $newProfileImage->temporaryUrl() }}" alt="Profile Image Preview" class="img-thumbnail" style="max-height: 150px;">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3 float-end">Update Profile</button>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function adjustResponsiveStyles() {
        var profileCard = document.querySelector('.profile-card');
        var profileInfo = document.querySelector('.profile-info');
        var profileImages = document.querySelectorAll('.profile-info img');
        var formGroups = document.querySelectorAll('.form-group');
        var cardHeaderH6 = document.querySelector('.card-header h6');

        if (window.innerWidth <= 768) {
            profileCard.style.height = 'auto';
            profileCard.style.padding = '20px';

            profileInfo.style.position = 'static';
            profileInfo.style.transform = 'none';
            profileInfo.style.marginTop = '20px';

            profileImages.forEach(function(img) {
                img.style.width = '80px';
                img.style.height = '80px';
            });

            formGroups.forEach(function(group) {
                group.style.marginBottom = '15px';
            });

            if (cardHeaderH6) {
                cardHeaderH6.style.fontSize = '1.25rem';
            }
        } else {
            profileCard.style.height = '300px';
            profileCard.style.padding = '0';

            profileInfo.style.position = 'absolute';
            profileInfo.style.transform = 'translateX(-50%)';
            profileInfo.style.marginTop = '0';

            profileImages.forEach(function(img) {
                img.style.width = '100px';
                img.style.height = '100px';
            });

            formGroups.forEach(function(group) {
                group.style.marginBottom = '0';
            });

            if (cardHeaderH6) {
                cardHeaderH6.style.fontSize = '1rem';
            }
        }

        if (window.innerWidth <= 576) {
            profileImages.forEach(function(img) {
                img.style.width = '70px';
                img.style.height = '70px';
            });
        }
    }

    window.addEventListener('resize', adjustResponsiveStyles);
    window.addEventListener('DOMContentLoaded', adjustResponsiveStyles);
</script>
