import { Injectable } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { Repository } from 'typeorm';
import { User } from './user.entity';
import { CreateUserDto } from './dto/create-user.dto';
import { Profile } from './profile.entity';
import { UpsertProfileDto } from './dto/upsert-profile.dto';

@Injectable()
export class UsersService {
  constructor(
    @InjectRepository(User)
    private usersRepository: Repository<User>,
    @InjectRepository(Profile)
    private profilesRepository: Repository<Profile>,
  ) {}

  findAll(): Promise<User[]> {
    return this.usersRepository.find();
  }

  findOneByEmail(mail: string): Promise<User> {
    return this.usersRepository.findOneBy({ mail });
  }

  create(createUserDto: CreateUserDto): Promise<User> {
    const user = new User();

    user.mail = createUserDto.mail;
    user.password = createUserDto.password;

    return this.usersRepository.save(user);
  }

  async upsertProfile(
    userId: number,
    upsertProfileDto: UpsertProfileDto,
  ): Promise<Profile> {
    const profile = new Profile();

    profile.age = upsertProfileDto.age;
    profile.weight = upsertProfileDto.weight;
    profile.size = upsertProfileDto.size;

    const user = await this.usersRepository.findOneBy({ id: userId });
    if (user.profile) {
      profile.id = user.profile.id;
    }

    await this.profilesRepository.save(profile);
    user.profile = profile;

    await this.usersRepository.save(user);

    return profile;
  }

  findUserById(userId: number): Promise<User> {
    return this.usersRepository.findOneBy({ id: userId });
  }

  async remove(id: string): Promise<void> {
    await this.usersRepository.delete(id);
  }
}
