import { Injectable } from '@nestjs/common';
import { UsersService } from '../users/user.service';
import { JwtService } from '@nestjs/jwt';

@Injectable()
export class AuthService {
  constructor(
    private usersService: UsersService,
    private jwtService: JwtService,
  ) {}

  async validateUser(mail: string, pass: string): Promise<any> {
    const user = await this.usersService.findOneByEmail(mail);
    if (user && user.password === pass) {
      const { password, ...result } = user;
      return result;
    }
    return null;
  }
  async login(user: any) {
    const payload = { mail: user.mail, sub: user.id };
    return {
      access_token: this.jwtService.sign(payload),
    };
  }
}
