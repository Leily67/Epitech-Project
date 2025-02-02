import {
  Body,
  Controller,
  Post,
  UseGuards,
  Request,
  Get,
} from '@nestjs/common';
import { JwtAuthGuard } from 'src/auth/jwt-auth.guard';
import { UsersService } from './user.service';
import { UpsertProfileDto } from './dto/upsert-profile.dto';

@UseGuards(JwtAuthGuard)
@Controller()
export class UsersController {
  constructor(private userService: UsersService) {}

  @Post('profile')
  upsertProfile(@Request() req, @Body() upsertProfileDto: UpsertProfileDto) {
    return this.userService.upsertProfile(req.user.id, upsertProfileDto);
  }

  @Get('profile')
  async getProfile(@Request() req) {
    const user = await this.userService.findUserById(req.user.id);
    delete user.password;

    return user;
  }
}
